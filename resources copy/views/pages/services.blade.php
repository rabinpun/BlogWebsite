@extends('layout/master')
@section('content')
<h1><ul class="list-group">Our services</ul></h1>
    @if (count($services)>0)
        @foreach ($services as $item)
        <li class="list-group-item">{{$item}}</li>
            
        @endforeach
        
    @endif
    
@endsection

