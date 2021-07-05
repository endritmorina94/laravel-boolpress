<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        if(!$categories){
            abort('404');
        }

        $data = [
            'categories' => $categories,
        ];

        return view('admin.categories.show', $data);
    }
}
