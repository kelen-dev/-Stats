<?php

namespace App\Http\Controllers\Admin;

use App\Extensions\UpdateManager;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Support\Charts;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function index(Request $request)
    {
        $updates = $this->app->make(UpdateManager::class);
        $newVersion = $updates->hasUpdate() ? $updates->getLastVersion() : null;

        return view('admin.dashboard', [
            'secure' => $request->secure() || ! $this->app->isProduction(),
            'userCount' => User::whereNull('deleted_at')->count(),
            'postCount' => Post::count(),
            'pageCount' => Page::count(),
            'imageCount' => Image::count(),
            'newUsersPerMonths' => Charts::countByMonths(User::whereNull('deleted_at')),
            'newUsersPerDays' => Charts::countByDays(User::whereNull('deleted_at')),
            'activeUsers' => $this->getActiveUsers(),
            'newVersion' => $newVersion,
            'apiAlerts' => $updates->getApiAlerts(),
        ]);
    }

    public function fallback()
    {
        return response()->view('admin.errors.404', [], 404);
    }

    protected function getActiveUsers()
    {
        $days = [1, 7, 31];

        $users = collect([
            1 => 0,
            7 => 0,
            31 => 0,
        ]);

        User::where('last_login_at', '>=', now()->subMonth())
            ->without('role')
            ->get(['id', 'last_login_at'])
            ->each(function ($user) use ($days, $users) {
                $diff = $user->last_login_at->diffInDays();

                foreach ($days as $time) {
                    if ($diff <= $time) {
                        $users->put($time, $users->get($time, 0) + 1);
                        break;
                    }
                }
            });

        $users = $users->mapWithKeys(function ($value, $key) {
            $time = now()->subDays($key)->longAbsoluteDiffForHumans();

            return [$time => $value];
        });

        $oldUsers = User::whereDate('last_login_at', '<', now()->subMonth())->count();
        $users->put('+ '.now()->subMonth()->longAbsoluteDiffForHumans(), $oldUsers);

        return $users;
    }
}
