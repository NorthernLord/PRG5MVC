@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Terug</a>
    <br><br>

    <h1>Post Creëren</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titel')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Tekst')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Tekst'])}}
        </div>
        <div class="form-group">
            {{Form::label('statusCheckbox', 'Publiceren')}}
            {{Form::checkbox('statusCheckbox', '1', false, ['class' => ''])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::Submit('Opslaan', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection