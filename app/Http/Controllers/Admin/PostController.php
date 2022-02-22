<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.index', [
            'portfolio' => Post::with('author')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create', [
            'pendingId' => old('pending_id', Str::uuid()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Post::create(Arr::except($request->validated(), 'image'));

        if ($request->hasFile('image')) {
            $post->storeImage($request->file('image'), true);
        }

        $post->persistPendingAttachments($request->input('pending_id'));

        return redirect()->route('admin.portfolio.index')->with('success', trans('admin.portfolio.status.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.portfolio.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if ($request->hasFile('image')) {
            $post->storeImage($request->file('image'));
        }

        $post->update(Arr::except($request->validated(), 'image'));

        return redirect()->route('admin.portfolio.index')->with('success', trans('admin.portfolio.status.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.portfolio.index')->with('success', trans('admin.portfolio.status.deleted'));
    }
}
