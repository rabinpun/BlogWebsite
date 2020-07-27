@extends('layout.master')

@section('content')

<div class="jumbotron text-center" style="margin: 100px" ><h1>Hello!</h1>
<h3>We are making a blog website.</h3>
@if(Auth::guest())<!--guest means you are not logged in checks if already logged in Loginand register willnot showif logged in-->
<div class="container">
<a class='btn btn-primary btn-lg' href="{{route('login')}}">Login</a><h1> </h1>     
<a class='btn btn-success btn-lg' href="{{'register'}}">Register</a>
</div>
@endif
</div>



      
@endsection