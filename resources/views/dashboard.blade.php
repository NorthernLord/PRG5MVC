@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <br><br>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    {{-- <td>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-success active">
                                                <input type="checkbox" name="options" id="option1{{$post->id}}" autocomplete="off" checked>Enabled
                                            </label>
                                            <label class="btn btn-danger">
                                                <input type="checkbox" name="options" id="option2{{$post->id}}" autocomplete="off">Disabled
                                            </label>
                                        </div>
                                    </td> --}}
                                    <td>
                                        {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{Form::close()}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>U don't have any posts yet, click the above "Create Post" button to make your first post!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
