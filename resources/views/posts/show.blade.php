@extends('layouts.container')

@section('content')
    <a href="/posts" class="btn btn-primary">Terug</a>
    <br><br>

    <h1>{{ $post->title }}</h1>

    <br><br>

    <div>
        {!!$post->body !!}
    </div>
    <hr>
    <small>Geplaatst op {{ $post->created_at }} door: <span class="text-primary">{{ $post->user->name }}</span></small>
    <br>
    <small>Categorie: <span class="text-primary">{{ $post->category->name }}</span></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Aanpassen</a>

            {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Verwijderen', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @endif
    @endif
@endsection
