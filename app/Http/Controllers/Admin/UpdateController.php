<?php

namespace App\Http\Controllers\Admin;

use App\App;
use App\Extensions\UpdateManager;
use App\Http\Controllers\Controller;
use App\Models\ActionLog;
use Exception;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * The update manager instance.
     *
     * @var \App\Extensions\UpdateManager
     */
    protected $updates;

    /**
     * Create a new controller instance.
     *
     * @param  \App\Extensions\UpdateManager  $updates
     */
    public function __construct(UpdateManager $updates)
    {
        $this->updates = $updates;
    }

    public function index()
    {
        return view('admin.update.index', [
            'lastVersion' => $this->updates->getLastVersion(),
            'hasUpdate' => $this->updates->hasUpdate(),
            'isDownloaded' => $this->updates->isLastVersionDownloaded(),
        ]);
    }

    public function fetch()
    {
        $response = redirect()->route('admin.update.index');

        try {
            $this->updates->forceFetchUpdates();
        } catch (Exception $e) {
            return $response->with('error', trans('admin.update.status.error-fetch', [
                'error' => $e->getMessage(),
            ]));
        }

        if (! $this->updates->hasUpdate(true)) {
            return $response->with('success', trans('admin.update.status.up-to-date'));
        }

        return $response;
    }

    public function download(Request $request)
    {
        $update = $this->updates->getUpdate(true);

        if (! $this->updates->hasUpdate()) {
            return response()->json([
                'message' => trans('admin.update.status.up-to-date'),
            ]);
        }

        try {
            $this->updates->download($update);
        } catch (Exception $e) {
            return response()->json([
                'message' => trans('admin.update.status.error-download', [
                    'error' => $e->getMessage(),
                ]),
            ], 422);
        }

        $request->session()->flash('success', trans('admin.update.status.download-success'));

        return response()->noContent();
    }

    public function install(Request $request)
    {
        $update = $this->updates->getUpdate(true);

        if (! $this->updates->hasUpdate()) {
            return response()->json([
                'message' => trans('admin.update.status.up-to-date'),
            ]);
        }

        try {
            $this->updates->installUpdate($update);
        } catch (Exception $e) {
            return response()->json([
                'message' => trans('admin.update.status.error-install', [
                    'error' => $e->getMessage(),
                ]),
            ], 422);
        }

        $request->session()->flash('success', trans('admin.update.status.install-success'));

        ActionLog::log('updates.installed');

        return response()->noContent();
    }

    public function version()
    {
        return response()->json([
            'App' => App::version(),
            'php' => PHP_VERSION,
        ]);
    }
}
