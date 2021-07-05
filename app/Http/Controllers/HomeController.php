<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        return view('guest.home', $data);
    }
}
