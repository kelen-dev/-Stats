<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActionLog;

class ActionLogController extends Controller
{
    public function index()
    {
        return view('admin.logs.index', [
            'logs' => ActionLog::with(['user', 'target'])->latest()->paginate(),
        ]);
    }

    public function clear()
    {
        ActionLog::whereDate('created_at', '<', now()->subDays(15))->delete();

        return redirect()->route('admin.logs.index')->with('success', trans('admin.logs.status.cleared'));
    }
}
