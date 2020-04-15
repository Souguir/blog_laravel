@extends('layouts.main')

@section('title', '| Supprimer Commentaire?')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Supprimer Commentaire?</h1>
			<p>
				<strong>Nom:</strong> {{ $comment->name }}<br>
				<strong>Email:</strong> {{ $comment->email }}<br>
				<strong>Commentaire:</strong> {{ $comment->comment }}
			</p>

			{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Oui supprimer ce commentaire', ['class' => 'btn btn-lg btn-block btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection
