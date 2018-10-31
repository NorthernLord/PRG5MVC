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
        <br><br>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
@endsection