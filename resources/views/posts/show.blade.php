
@extends('layout.master')

@section('content')
<a class="btn  btn-lg" href="/posts" role="button">Go Back</a>
<ul class="list-group">
<li class="list-group-item"><div><h1>{{$post->title}}</h1>
  <li class="list-group-item">  <h4>{!!$post->body!!} </h4> </li>  
</div></li>
<div class="float-right">
    <h4 class="list-group-item">Created By {{$post->user->name}}</h4>
<h5 class="list-group-item">Date created on {{$post->created_at}}</h5><br>
<h5 class="list-group-item">Date updated on {{$post->updated_at}}</h5></div>
@if(!Auth::guest())<!--checks if you are logged in only then you can edit post-->
      @if(Auth::user()->id == $post->user_id)<!--so that user can only edit his own post-->
          <div class="container"><a class="btn  btn-lg btn-primary float-left " href="/posts/{{$post->user_id}}/edit" role="button">Edit</a>
          {!!Form::open(['action'=>['postcontroller@destroy',$post->id],'method'=>'DELETE'])!!}
          {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger float-right'])}}
          {!!Form::close()!!}</div>
      @endif
@endif
@endsection
</div>