@extends('layouts.main')

@section('content')
<h1> List Of Articles  </h1>

@if(count($articles) > 0)
<ul class="list-group">
    @foreach ($articles as $article)
        <li class="list-group-item">{{$article->post_title}} </li>
        <li class="list-group-item">{{$article->post_content}} </li>
    @endforeach
</ul>
@endif
@endsection
