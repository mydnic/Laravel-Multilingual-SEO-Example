<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

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
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post')
            ->with('post', $post);
    }
}
