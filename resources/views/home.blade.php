@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Home</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>
                    </h3>
                    <div><ul class="list-group"><h1>Your Posts</h1>
                        
                        <div class='text-center'>@if (count($posts)>0)
                            @foreach ($posts as $item)
                            <li class="list-group-item "> <h2 class="float-left"><a href="/posts/{{$item->id}}">{{$item->title}}</a></h2></li>
                                <h5 align='right'>Post written on{{$item->created_at}}</h5>
                                <h5 align=right>Post updated at{{$item->updated_at}}</h5>
                                <h5 align=right>By {{$item->user->name}}</h5>
                                <div class='container'>
                                    <a class="btn  btn-lg btn-primary float-left " href="/posts/{{$item->user_id}}/edit" role="button">Edit</a>

                                        {!!Form::open(['action'=>['postcontroller@destroy',$item->id],'method'=>'DELETE'])!!}
                                        {{Form::submit('Delete',['class'=>'btn btn-lg btn-danger float-right'])}}
                                        {!!Form::close()!!}</div></ul>
                                
                            @endforeach
                        @else
                            <h3>No Posts Found</p>
                        @endif


                    </div>
                        </ul></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
