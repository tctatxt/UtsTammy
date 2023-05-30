<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $higlight = Post::orderBy('like', 'desc')->first();
        $latest = Detail::orderBy('date', 'desc')->take(4)->get();
        $posts = Post::all();
        return view('home', compact('higlight', 'latest', 'posts'));
    }

    public function show($postid){
        $post = Post::find($postid);
        return view('detail', compact('post'));
    }


}
