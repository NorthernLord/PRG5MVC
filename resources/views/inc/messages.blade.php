@if(count($errors) > 0)
    <br>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger container">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <br>
    <div class="alert alert-success container">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <br>
    <div class="alert alert-danger container">
        {{session('error')}}
    </div>
@endif
