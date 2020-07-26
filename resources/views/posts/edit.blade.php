@extends('layout.master')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>['postcontroller@update',$post->id], 'method'=>'PUT']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter the title'])}}
    {{Form::label('body','Content')}}
    {{Form::textarea('body',$post->body,['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Enter the content'])}}
   


</div>
{{Form::submit('Update',['class'=>'btn btn-primary'])}}
{!! Form::close()!!}

@endsection