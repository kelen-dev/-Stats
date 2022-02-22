<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Models\Page;

class PageAttachmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AttachmentRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function store(AttachmentRequest $request, Page $page)
    {
        $imageUrl = $page->storeAttachment($request->file('file'));

        return response()->json(['location' => $imageUrl]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AttachmentRequest  $request
     * @param  string  $pendingId
     * @return \Illuminate\Http\Response
     */
    public function pending(AttachmentRequest $request, string $pendingId)
    {
        $imageUrl = Page::storePendingAttachment($pendingId, $request->file('file'));

        return response()->json(['location' => $imageUrl]);
    }
}
