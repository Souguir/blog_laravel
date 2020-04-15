@extends('layouts.main')

@section('titre', '|Editer un Article')

@section('content')
<div class="row">
  {!!Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT'])!!}
  <div class="col-md-8">
    {{Form::label('post_title','Titre:')}}
    {{Form::text('post_title',null, ["class"=>'form-control input-lg'])}}
    {{Form::label('post_content','Contenu:', ['class'=>'form-spacing-top'])}}
    {{Form::textarea('post_content',null, ["class"=>'form-control'])}}

  </div>

  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizantal">
        <dt>Crée Le:</dt>
        <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
      </dl>

      <dl class="dl-horizantal">
        <dt>Mis à jour Le:</dt>
        <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
      </dl>

      <hr>
      <div class="row">
        <div class="col-md-6">
          {!!Html::linkRoute('posts.show', 'Annuler', array($post->id),
              array('class'=>'btn btn-danger btn-block'))!!}
        </div>

        <div class="col-md-6">
          {{Form::submit('Sauvegerder',['class'=>'btn btn-success btn-block'])}}

        </div>
        </div>
        </div>
      </div>
      {!!Form::close()!!}
      
      @endsection
