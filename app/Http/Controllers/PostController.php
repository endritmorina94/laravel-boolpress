<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $data = [
            'posts' => $posts
        ];

        return view('guest.posts.index', $data);
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        if(!$post){
            abort('404');
        }

        $same_cat_posts = Post::where('slug', 'NOT like', $slug)
        ->where('category_id', '=', $post->category_id)->limit(3)->get();

        $data = [
            'post' => $post,
            'category' => $post->category,
            'tags' => $post->tags,
            'same_cat_posts' => $same_cat_posts
        ];

        return view('guest.posts.show', $data);
    }

    //Funzione che tornerà la nostra pagina con Vue, che stamperà i datit tramite chiata API
    public function vuePosts()
    {
        return view('guest.posts.vue-posts');
    }
}
