<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    public function show($slug)
    {
        //Cerco il tag con lo slug uguale a quello passato dall'url
        $tag = Tag::where('slug', '=', $slug)->first();

        //Se non lo trovo do errore 404
        if(!$tag){
            abort('404');
        }

        //Altrimenti passo il tag e i relativi post
        $data = [
            'tag' => $tag,
            'posts' => $tag->posts
        ];

        return view('guest.tags.show', $data);
    }
}
