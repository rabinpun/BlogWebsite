
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
@endsection
</div>