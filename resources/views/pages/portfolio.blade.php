@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class="spacing header">
        <i class="material-icons">web</i><span class="banner-text-h1 header-text">Portfolio</span>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/fietsenmakerij_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="https://stud.hosted.hr.nl/0944889/fietsenmakerij/" target="_blank">Fietsenmakerij</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/grotekerkplein_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="https://stud.hosted.hr.nl/0944889/grotekerkplein/" target="_blank">Grotekerkplein</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/zwaan_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="https://zwaan.ga" target="_blank">Zwaan</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/restful_api_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="http://188.166.85.73:3000/api/movies" target="_blank">RESTful API</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/berendkalberg_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="http://www.berendkalberg.com" target="_blank">Persoonlijke Portfolio</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a><img class="card-img-top" src="storage/portfolio_cover_images/poof_homepage.png" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="https://stud.hosted.hr.nl/0944889/PRG4GAME/docs/" target="_blank">POOF</a>
            </h4>
            <p class="card-text"></p>
            </div>
        </div>
        </div>

    </div>
    <hr class="active" style="margin: 40px 0px 0px 0px;">
</div>

@endsection
