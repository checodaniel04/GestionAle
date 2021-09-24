<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticiaint;

class PostController extends Controller
{
    public function index(){

        $posts = noticiaint::where('status', 1)->latest('id')->paginate(8);
        //return $posts->all();
       return view('dashboard',compact('posts'));
    }
    public function show(noticiaint $post){

     
        return view('post.show', compact('post'));
        //return $post;
       
    }
}
