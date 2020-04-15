@extends('layouts.main')

@section('title', '| Articles')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Liste des Articles</h1>
  </div>
</div>
<hr>
@foreach($posts as $post)
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{$post->post_title}}</h2>
    <h5>Publié: {{date('M j, Y', strtotime($post->created_at))}}</h5>

    <p>{{substr($post->post_content,0,200)}} {{strlen($post->post_content)>200?"...":""}}</p>

    <a href="{{route('articles.single', $post->id)}}" class="btn btn-primary">Voir plus</a>
</div>
</div>
@endforeach
@endsection
