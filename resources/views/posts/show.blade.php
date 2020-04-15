@extends('layouts.main')

@section('titre', '|View Post')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->post_title }}</h1>
    <p class="lead">{{ $post->post_content }}</p>

    <div id="backend-comments" style="margin-top: 50px;">
    				<h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>

    				<table class="table">
    					<thead>
    						<tr>
    							<th>Name</th>
    							<th>Email</th>
    							<th>Comment</th>
    							<th width="70px"></th>
    						</tr>
    					</thead>

    					<tbody>
    						@foreach ($post->comments as $comment)
    						<tr>
    							<td>{{ $comment->name }}</td>
    							<td>{{ $comment->email }}</td>
    							<td>{{ $comment->comment }}</td>
    							<td>
    								<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
    								<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
    							</td>
    						</tr>
    						@endforeach
    					</tbody>
    				</table>
    			</div>

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
          {!!Html::linkRoute('posts.edit', 'Modifier', array($post->id),
              array('class'=>'btn btn-primary btn-block'))!!}
        </div>

        <div class="col-md-6">
          {!!Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}

          {!!Form::submit('Supprimer', ['class'=>'btn btn-danger btn-block'])!!}

          {!!Form::close()!!}
        </div>
        </div>
        </div>
      </div>
      </div>

      @endsection
