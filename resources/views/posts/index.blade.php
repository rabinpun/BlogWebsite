@extends('layout.master')

@section('content')
<div><ul class="list-group"><h1>Your Posts</h1>
    <div class='text-center'>@if (count($postdt)>0)
        @foreach ($postdt as $item)
        <li class="list-group-item "> <h2 class="float-left"><a href="/posts/{{$item->id}}">{{$item->title}}</a></h2></li>
            <h5 align='right'>Post written on{{$item->created_at}}</h5>
            <h5 align=right>Post updated at{{$item->updated_at}}</h5>
            <h5 align=right>Created By{{$item->user_id}}</h5>
        @endforeach
        {{$postdt->links()}}
    @else
        <p>No Posts Found</p>
    @endif
</div>
    </ul></div>


@endsection