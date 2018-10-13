@extends('layouts.app')

@section('content')
    <br>
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card bg-light">
                <h5 class="card-header"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                <div class="card-body">
                    <small>Posted on {{$post->created_at}}</small>
                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection