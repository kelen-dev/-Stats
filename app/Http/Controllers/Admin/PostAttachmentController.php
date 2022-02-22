<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Models\Post;

class PostAttachmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AttachmentRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function store(AttachmentRequest $request, Post $post)
    {
        $imageUrl = $post->storeAttachment($request->file('file'));

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
        $imageUrl = Post::storePendingAttachment($pendingId, $request->file('file'));

        return response()->json(['location' => $imageUrl]);
    }
}
