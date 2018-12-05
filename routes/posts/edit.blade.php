@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Back</a>
    <br><br>

    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div>
            {{Form::hidden('_method', 'PUT')}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection