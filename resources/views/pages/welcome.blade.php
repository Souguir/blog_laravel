@extends('layouts.main')
@section('title', '| Acceuil')
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Bienvenue Dans Notre Blog!</h1>
            <p class="lead">Merci pour votre visite! Nous attendons vos commentaires! </p>

          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">

          @foreach($posts as $post)
          <div class="post">
            <h3>{{$post->post_title}}</h3>
            <p>{{substr($post->post_content,0,150)}} {{strlen($post->post_content)>150?"...":""}}</p>
            <a class="btn btn-primary btn-sm" href="{{url('/articles'.'/'.$post->id)}}">Voir plus</a>
          </div>
          <hr>
          @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
          
        </div>
      </div>

 @endsection
