@extends('layouts.container')

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
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Tekst', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'Categorie:') }}
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
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

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
