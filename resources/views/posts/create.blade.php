@extends('layouts.main')

@section('titre', '|Créer Nouvel Artice')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <hr>
    {!! Form::open(array('route' => 'posts.store')) !!}


    {{Form::label('post_title','Titre:')}}
    {{Form::text('post_title',null,array('class' => 'form-control'))}}




    {{Form::label('post_content','Contenu:')}}
    {{Form::textarea('post_content',null,array('class' => 'form-control'))}}

    {{Form::submit('Créer Article', array('class'=> 'btn btn-success btn-lg btn-block'))}}

    {!! Form::close() !!}
  </div>
</div>
  
@endsection
