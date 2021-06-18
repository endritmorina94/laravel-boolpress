<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    $posts = Post::all();

    $data = [
        'posts' => $posts
    ];

    return view('guest.posts.index', $data);
}
