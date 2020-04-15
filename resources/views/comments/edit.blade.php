@extends('layouts.main')

@section('title', '| Modifier Commentaire')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Modifier Commentaire</h1>

			{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}

				{{ Form::label('name', 'Nom:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}

				{{ Form::label('comment', 'Commentaire:') }}
				{{ Form::textarea('comment', null, ['class' => 'form-control']) }}

				{{ Form::submit('Modifier Commentaire', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}

			{{ Form::close() }}
      
		</div>

	</div>

@endsection
