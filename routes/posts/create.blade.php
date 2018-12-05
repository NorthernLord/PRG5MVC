@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Back</a>
    <br><br>

    <h1>Create Post</h1>
    {{-- When form opens CSRF token is added --}}
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::Submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection