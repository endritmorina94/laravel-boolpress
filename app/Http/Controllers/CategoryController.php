<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();

        if(!$category){
            abort('404');
        }

        $data = [
            'category' => $category,
            //Aggiungo ai data i post appartenenti alla suddetta categoria
            'posts' => $category->posts
        ];

        return view('guest.categories.show', $data);
    }
}
