@extends('layouts.app')

@section('content')
    <a href="/posts/create" class="btn btn-primary">Blogpost Schrijven</a>

    <br><br>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorie
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

    <br><br>

    <h1>Blogposts</h1>

    {{-- @foreach ($categories as $category) {
        {{ $category }}
    }
        
    @endforeach --}}
    
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
                            <small>Geplaatst op {{$post->created_at}} door: <span class="text-primary">{{$post->user->name}}</span></small>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Geen blogposts gevonden</p>
    @endif
@endsection