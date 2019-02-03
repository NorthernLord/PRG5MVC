@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Admin Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="/posts/create" class="btn btn-primary">Blogpost schrijven</a>
            <a href="/posts/create" class="btn btn-primary">Blogposts</a>
            <a href="/posts/create" class="btn btn-primary">Gebruikers</a>
            <a class="btn btn-primary" href=" {{route('categories.index')}}">Categorieën</a>

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
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Aanpassen</a></td>
                                <td>
                                    {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Verwijderen', ['class' => 'btn btn-danger btn-sm'])}}
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
    </div>
@endsection