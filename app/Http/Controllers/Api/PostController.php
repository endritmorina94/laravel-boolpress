<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        //Prendo tutti i post disponibili nel DB
        $posts = Post::all();

        //Creo un array vuoto
        $posts_result = [];

        //Tramite ciclo foreach inserisco nell'array vuoto i dati che voglio per ogni post
        foreach ($posts as $post) {
            $posts_result[] = [
                'id' => $post->id,
                'slug' => $post->slug,
                'title' => $post->title,
                'content' => $post->content,
                'img_path' => $post->img_path,
                'category' => $post->category ? $post->category->name : '',
                'tags' => $post->tags->toArray()
            ];
        }

        //Torno la risposta sotto forma di json
        return response()->json($posts_result);
    }
}
