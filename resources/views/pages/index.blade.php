@extends('layout.master')

@section('content')



@if(Auth::guest())<!--guest means you are not logged in checks if already logged in Loginand register willnot showif logged in-->
<div class="jumbotron text-center" style="margin: 100px" ><h1>Hello!</h1>
<h3>Lets make a blog Yay.</h3>
<div class="container">
<a class='btn btn-primary btn-lg' href="{{route('login')}}">Login</a><h1> </h1>     
<a class='btn btn-success btn-lg' href="{{'register'}}">Register</a>
</div>
@endif
@if (Auth::user())
<h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $item)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="{{asset('storage/cover_imgs/'.$item->cover_img)}}"  >
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <br><h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                        <small >Post written on{{$item->created_at}} By{{$item->user_id}}</small>
                        <small >Post updated at{{$item->updated_at}} By{{$item->user_id}}</small>
                    </div>
               </div>
            </div><br>
        @endforeach
    
    @else
        <p>No Posts Found</p>
    @endif
    
@endif
</div>



      
@endsection