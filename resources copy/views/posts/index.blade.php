@extends('layout.master')

@section('content')
@auth
<a class="btn btn-primary" href="{{route('posts.create')}}">Create a new post</a>
@endauth
<h1>Posts</h1>
    @if (count($postdt)>0)
        @foreach ($postdt as $item)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="{{asset('cover_imgs/'.$item->cover_img)}}"  >
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <br><h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                        <small >Post written on{{$item->created_at}} By{{$item->user_id}}</small>
                        <small >Post updated at{{$item->updated_at}} By{{$item->user_id}}</small>
                    </div>
               </div>
            </div><br>
        @endforeach
        {{$postdt->links()}}
    @else
        <p>No Posts Found</p>
    @endif


@endsection