@extends('layout.master')

@section('content')
<div><ul class="list-group"><h1>Posts</h1>
    <div class='text-center'>@if (count($postdt)>0)
        @foreach ($postdt as $item)
        <li class="list-group-item" class=text-center > <h2><a href="/posts/{{$item->id}}">{{$item->title}}</a></h2></li>
            <h5 align='right'>Post written on{{$item->created_at}}</h5>
            <h5 align=right>Post updated at{{$item->updated_at}}</h5>
        @endforeach
        {{$postdt->links()}}
    @else
        <p>No Posts Found</p>
    @endif
</div>
    </ul></div>


@endsection