<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;



class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $suggested_posts = Post::where('suggested', 'like', 'yes')->get();
        $last_posts = Post::where('suggested', 'NOT like', 'yes')->orderByDesc('created_at')->limit(3)->get();

        $data = [
            'categories' => $categories,
            'suggested_posts' => $suggested_posts,
            'last_posts' => $last_posts
        ];

        return view('admin.home', $data);
    }
}
