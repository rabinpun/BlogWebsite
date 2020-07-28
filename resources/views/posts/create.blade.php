@extends('layout.master')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>'postcontroller@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div>
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter the title'])}}
    </div>
    <div class="form-group"></div>
        {{Form::label('body','Content')}}
        {{Form::textarea('body','',['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Enter the content'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_img')}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
    </div>
</div>

@endsection