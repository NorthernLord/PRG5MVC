@extends('layouts.container')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Terug</a>
    <br><br>

    <h1>Blogpost aanpassen</h1>
    {{Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
        <div class="form-group">
            {{Form::label('title', 'Titel')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Tekst')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'Categorie:') }}
            {{ Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('cover_image', 'Thumbnail:') }}
            {{Form::file('cover_image')}}
        </div>
        <div>
            {{Form::hidden('_method', 'PUT')}}
        </div>
        <div>
            {{Form::submit('Opslaan', ['class' => 'btn btn-primary'])}}
        </div>
    {{Form::close()}}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
