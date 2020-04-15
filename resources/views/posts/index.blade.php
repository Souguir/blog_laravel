@extends('layouts.main')

@section('title', '| Tous les Articles')


@section('content')


  <div class="row">
    <div class="col-md-9">
      <h1>La liste de mes articles</h1>
    </div>
        <div class="col-md-3">
          <a href="{{route('posts.create')}}" class= "btn btn-lg btn-block btn-primary btn-h1-spacing">Créer Nouvel Article</a>
        </div>
        <div class="col-md-12">
        <hr>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>

            <th>Titre</th>
            <th>Contenu</th>
            <th>Crée le</th>
            <th>Actions</th>
          </thead>

          <tbody>
            @foreach($posts as $post)
            <tr>
              
              <td>{{$post->post_title}}</td>
              <td>{{substr($post->post_content, 0, 50)}} {{strlen($post->post_content)>50?"...":""}}</td>
              <td>{{date('M j, Y',strtotime($post->created_at)) }}</td>
              <td>
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">Consulter</a></td>
              <td>  <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Modifier</a>
               </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>

@endsection
