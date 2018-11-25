@extends('layouts.app')

@section('content')
    <a href="/posts/create" class="btn btn-primary">Create post</a>
    <br><br>

    <h1>Posts</h1>
    
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <br>
                        <div>
                            <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        </div>
                        <hr>
                        <div>
                            <small>Posted on {{$post->created_at}} by <span class="text-primary">{{$post->user->name}}</span></small>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection