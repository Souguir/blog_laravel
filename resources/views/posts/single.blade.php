@extends('layouts.main')
<?php $titleTag=htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Titre :{{$post->post_title}}</h1>
      <hr>
      <h4><i>Auteur :{{$post->author->name}}</i></h4>
      <hr>
      <p class="font-weight-light">{{$post->post_content}}</p>
    </div>
</div>
<hr>

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>





<div class="row">
<div id="comment-form"  class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
  {{Form::open(['route'=>['comments.store', $post->id], 'method'=>'POST']) }}

          <div class="row">
            <div class="col-md-6">
              {{Form::label('name',"Nom:")}}
              {{Form::text('name',null,['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
              {{Form::label('email',"Email:")}}
              {{Form::text('email',null,['class'=>'form-control']) }}
            </div>

            <div class="col-md-12">
              {{Form::label('comment',"Commentaire")}}
              {{Form::textarea('comment',null,['class'=>'form-control', 'rows'=>'5']) }}


              {{Form::submit('Commenter',['class' =>'btn btn-success btn-block',
              'style'=>'margin-top:15px;'])}}
              </div>

          </div>
            {{Form::close()}}
          </div>
          </div>




@endsection
