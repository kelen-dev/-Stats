<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BanRequest;
use App\Models\Ban;
use App\Models\User;

class BanController extends Controller
{
    public function index()
    {
        return view('admin.bans.index', [
            'bans' => Ban::withTrashed()->with(['user', 'author', 'remover'])->paginate(),
        ]);
    }

    public function store(BanRequest $request, User $user)
    {
        Ban::create([
            'user_id' => $user->id,
            'reason' => $request->input('reason'),
        ]);

        return redirect()->route('admin.users.edit', $user)->with('success', trans('admin.users.status.banned'));
    }

    public function destroy(User $user, Ban $ban)
    {
        $ban->removeBan();

        return redirect()->route('admin.users.edit', $user)->with('success', trans('admin.users.status.unbanned'));
    }
}
