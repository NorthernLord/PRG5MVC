@extends('layouts.container')

@section('content')
    <h2 class="my-4">Blogposts</h2>

    <div class="widget">
        <div class="widget-heading">
            <h4>Categorieën:</h4>
        </div>
        <div class="widget-body">
            <ul class="categories">
                @foreach ($categories as $category)
                <li>
                <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <br><br>

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
                            <br>
                            <small>Categorie: <span class="text-primary">{{ $post->category->name }}</span></small>
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
