<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //index
    //create
    //store
    //edit
    //update

    //show
    public function articles() {

      $posts = \App\Post::all();
      $posts= $posts->where('post_type','=','article');

      $data = array(
          'articles'=>$posts
      );
      return view('pages.articles')->with($data);
  }
  
    public function show($post_name) {
        $post = \App\Post::where('post_name', $post_name)->first(); //get first post with post_nam==$post_name

        return view('posts/single', array(  //Pass the post to the view
            'post' => $post

        ));
    }

    //destroy ( for deleting a post)
}
