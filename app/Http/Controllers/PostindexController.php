<?php

namespace App\Http\Controllers;

use App\Models\noticia;




use Illuminate\Http\Request;

class PostindexController extends Controller
{
    public function index(){

        $posts = noticia::where('status', 1)->latest('id')->paginate(8);
        //return $posts->all();
       
       return view('welcome',compact('posts'));
    }

    public function show(noticia $post){

     
        return view('postint.show', compact('post'));
        //return $post;
       
    }
}
