<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['allposts' => $posts]);
        // \Log::debug($posts);
        // dd($posts);
        
    //metode, kas atgriež visus Post ierakstus
    }

    public function show($id){
        // \Log::debug($id);
        $post = Post::find($id); 
        return view('posts.show', ['onepost' => $post]); 
    }
}
