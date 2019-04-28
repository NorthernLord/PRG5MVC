@extends('layouts.container')

@section('title', '| All Categories')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Jou categorieën</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST', 'class' => 'float-right'])}}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Verwijderen', ['class' => 'btn btn-danger btn-sm'])}}
                            {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>Nieuwe Categorie</h2>
                    {{ Form::label('name', 'Naam:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                    <br>

                    {{ Form::submit('Nieuwe categorie', ['class' => 'btn btn-primary']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
