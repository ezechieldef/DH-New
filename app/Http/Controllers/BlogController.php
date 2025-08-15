<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::publie()->latest('publie_at')->paginate(9);
        return view('blog.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::whereSlug($slug)->publie()->firstOrFail();
        $related = Post::publie()->where('id','!=',$post->id)->limit(3)->get();
        return view('blog.show', compact('post','related'));
    }
}