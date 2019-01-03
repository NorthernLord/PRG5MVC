@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Berend Kalberg</h1>
        <p>Op deze website is al mijn werk te vinden, hieronder staan een aantal uitgelichte projecten.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Uitgelichte projecten</h1>
  
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="storage/portfolio_cover_images/fietsenmakerij_homepage.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project One</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>
  
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
          <div class="col-md-5">
                <h3>Project Two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class="btn btn-primary" href="#">View Project</a>
            </div>
        </div>
  
        <hr>

    </div>

@endsection

@section('footer')

    <footer class="page-footer font-small bg-dark">

        <div class="footer-copyright text-center py-3">
            <span class="text-light">© 2019 Copyright:</span>
            <a href="https://berendkalberg.me"> Berend Kalberg</a>
        </div>
    
    </footer
@endsection
