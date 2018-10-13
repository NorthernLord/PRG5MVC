@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Back</a>
    
    <br><br>

    <h1>{{$post->title}}</h1>
    
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Posted on {{$post->created_at}}</small>
@endsection