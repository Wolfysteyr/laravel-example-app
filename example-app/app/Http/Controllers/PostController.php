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

    public function show(Post $post){
        // \Log::debug($id);
        // $post = Post::find($id); 
        return view('posts.show', ['onepost' => $post]); 
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        \Log::debug($request);
        return "to be implemented";
        // mājās izveidot jaunu Post ierakstu datubāzē
    }
}
