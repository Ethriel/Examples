<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function Index(Request $request)
    {
        // $categories = Category::query()->get();
        // dd($categories);
        // $posts = Post::query()->with('Category')->get();
        // dd($posts);
        // $posts[0]->Category;

        // $posts = Post::query()->with('Tags')->get();
        // foreach ($posts[0]->Tags as $tag) {
        //     echo $tag->name . '<br/>';
        // }
        
        return 1;
    }
}