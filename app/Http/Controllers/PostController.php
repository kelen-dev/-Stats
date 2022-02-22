<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::published()
            ->with('author')
            ->orderByDesc('is_pinned')
            ->latest('published_at')
            ->get();

        return view('portfolio.index', ['portfolio' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Post $post)
    {
        $post->load(['author', 'comments.author', 'likes.author' => function ($query) {
            $query->without('role');
        }]);

        $this->authorize('view', $post);

        return view('portfolio.show', ['post' => $post]);
    }
}
