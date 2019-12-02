@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
   <script>
   </script>
<h1>{{$post->subject}}</h1>
<a>{{$post->content}}</a><br><br>
<a>id Pokemon : {{$post->idpokemon}}</a><br><br>
<div align="right">
      <a href="{{route('comment.create')}}">Comentar</a>
      {{-- <td><a href="{{action("CommentController@create",$post->idpost)}}">Comentar</a></td> --}}
</div>
<h2>Comentarios</h2>

<table class="table">
   <tr>
      <th>Idpost</th>
      <th>Id Usuario</th>
      <th>content</th>
   </tr>
@foreach ($aux as $comment)
   <tr>
      <td>{{$comment->idpost}}</td>
      <td>{{$comment->idusuario}}</td>
      <td>{{$comment->content}}</td>
   </tr>
@endforeach
</table>
<br>
<h3>Comentar</h3>
<br>
<form method="post" action="{{url('comment')}}">
@csrf
<div class="form-group">
      <input type="text" name="content" class="form-control" placeholder="Comentario"/>
</div>

<div id="test" class="form-group">
<input type="text" name="idpost" class="form-control" hidden value="{{$post->id}}"/>
</div>

<div class="form-group">
   <input type="submit"/>
</div>
</form>
@endsection