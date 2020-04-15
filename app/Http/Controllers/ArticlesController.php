<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    public function getArticles(){
      $posts=Post::all();
      return view('pages.archive')->withPosts($posts);
    }

    public function getSingle($id){
      $post= Post::where('id','=',$id)->first();
      return view('posts.single')->withPost($post);
    }

}
