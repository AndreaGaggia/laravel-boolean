<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
}
