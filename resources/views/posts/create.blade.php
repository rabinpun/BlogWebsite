@extends('layout.master')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>'postcontroller@store', 'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter the title'])}}
    {{Form::label('body','Content')}}
    {{Form::textarea('body','',['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Enter the content'])}}
   


</div>
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close()!!}

@endsection