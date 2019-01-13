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
                        {!! Form::open(['action' => 'PostsController@store']) !!}
                        <table class="table table-striped">
                            <tr>
                                <th>Titel</th>
                                <th>Uploaden naar blog</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        {{Form::open(['action' => ['PostsController@updateCheckbox', $post->id, 'enctype' => 'multipart/form-data'], 'method' => 'POST'])}}
                                            @if($post->status === 1)
                                            {{Form::checkbox('statusCheckbox', '0', true, ['class' => 'form-check-input', 'onchange' => 'this.form.submit()'])}}
                                            @else
                                            {{Form::checkbox('statusCheckbox', '1', false, ['class' => 'form-check-input', 'onchange' => 'this.form.submit()'])}}
                                            @endif
                                        {!! Form::close() !!}
                                    </td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
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