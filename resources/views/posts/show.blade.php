@extends('layout.master')

@section('content')
<a class="btn  btn-lg" href="/posts" role="button">Go Back</a>
<div><h1>{{$post->title}}</h1>
    {{$post->body}}    
</div>
<small>Date created on {{$post->created_at}}</small>
<small>Date updated on {{$post->updated_at}}</small>
@endsection