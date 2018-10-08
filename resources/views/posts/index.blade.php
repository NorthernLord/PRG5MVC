@extends('layouts.app')

@section('content')
    <h1>Posts</h3>
    @if(count($posts) > 1)
            @foreach($posts as $post)
                <div class="card bg-light">
                    <h5 class="card-header">{{$post->title}}</h5>
                    <div class="card-body">
                        <small>Posted on {{$post->created_at}}</small>
                    </div>
                </div>
            @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection