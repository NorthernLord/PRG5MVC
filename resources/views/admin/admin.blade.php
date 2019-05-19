@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">Administrator Dashboard, welkom {{ Auth::user()->name }}!</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="container dashboard-buttons">
                    <a href="/posts/create" class="btn btn-primary">
                        <i class="material-icons material-icons-sm no-padding">add</i>
                    </a>
                    {{-- <a href="/dashboard/posts" class="btn btn-primary">Blogposts</a> --}}
                    {{-- <a href="/dashboard/users" class="btn btn-primary">Gebruikers</a> --}}
                    <a href="/register" class="btn btn-primary">
                        <i class="material-icons material-icons-sm no-padding">person_add</i>
                    </a>
                    <a href="/categories" class="btn btn-primary">
                        <i class="material-icons material-icons-sm no-padding">category</i>
                    </a>
                </div>


                <br><br>

                <h3>Jouw blog posts</h3>
                @if(count($posts) > 0)
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Gepubliceerd</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach($posts as $post)
                            <tbody>
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <td>
                                        {{Form::open(['action' => ['PostsController@updateCheckbox', $post->id, 'enctype' => 'multipart/form-data'], 'method' => 'POST'])}}
                                            @if($post->status === 1)
                                            {{Form::checkbox('statusCheckbox', '0', true, ['class' => 'form-check-input dashboard-box', 'onchange' => 'this.form.submit()'])}}
                                            @else
                                            {{Form::checkbox('statusCheckbox', '1', false, ['class' => 'form-check-input dashboard-box', 'onchange' => 'this.form.submit()'])}}
                                            @endif
                                        {{Form::close()}}
                                    </td>
                                    <td>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">
                                            <i class="material-icons material-icons-sm no-padding">create</i>
                                        </a>
                                    </td>
                                    <td>
                                        {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{-- {{Form::submit('X', ['class' => 'btn btn-danger btn-sm'])}} --}}
                                            {{ Form::button('<i class="material-icons material-icons-sm no-padding" style="color: #fff">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                        {{Form::close()}}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                @else
                    <p>
                        Je hebt nog geen blogposts geplaatst, klik op de bovenstaande "Blogpost schrijven" knop om je eerste blogpost aan te maken!
                    </p>
                @endif
            </div>
            <hr class="active">
        </div>
    </div>
@endsection
