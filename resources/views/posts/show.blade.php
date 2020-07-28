
@extends('layout.master')

@section('content')
<a class="btn  btn-lg btn-primary" href="/posts" role="button">Go Back</a>
<ul class="list-group">
<div><h1>{{$post->title}}</h1>
  <img style="width:100%" src="{{asset('storage/cover_imgs/'.$post->cover_img)}}"  >
    <h4>{!!$post->body!!} </h4> 
</div>
<section>
    <h4 class="float-right">Created By {{$post->user->name}} <br> Date created on {{$post->created_at}}<br> Date updated on {{$post->updated_at}}</h4><br>
</section>
@if(!Auth::guest())<!--checks if you are logged in only then you can edit post-->
      @if(Auth::user()->id == $post->user_id)<!--so that user can only edit his own post-->
          <div ><a class="btn  btn-lg btn-primary float-left " href="/posts/{{$post->id}}/edit" role="button">Edit</a>
          {!!Form::open(['action'=>['postcontroller@destroy',$post->id],'method'=>'DELETE'])!!}
          {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger float-right'])}}
          {!!Form::close()!!}</div>
      @endif
@endif
@endsection