@extends('layouts.container')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

    <br>

    <embed src="storage/files/cv_berend_kalberg.pdf#view=FitH" type="application/pdf" width="100%" height="600px" />
@endsection
