<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('blog')
            ->with('posts', $posts);
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)->firstOrFail();

        if ($post->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('post.show', $post->translate()->slug);
        }

        return view('post')
            ->with('post', $post);
    }
}
