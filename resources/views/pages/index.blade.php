@extends('layouts.app')

@section('content')

<!-- Banner -->

<div class="pos-relative">
    <div class="banner"></div>
    <div class="banner-text">
        <h2 class="banner-text-h2">Creative Media & Game Technologies Student</h2>
        <hr style="background-color: white">
        <h4 class="banner-text-h4">Een creatieve webdeveloper voor al uw benodigdheden</h4>
    </div>
</div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Uitgelichte projecten</h1>
        <hr>

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a data-toggle="modal" data-target="#modalProjectOne" href="">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="storage/portfolio_cover_images/fietsenmakerij_homepage.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Fietsenmakerij</h3>
                <p>
                    Website gecreeërd voor een fietsenwinkel. Dit is een project geweest van 10 weken waarin de markt voor de fietsenwinkel een grote rol heeft gespeeld.
                </p>
                <p>
                    Een website ontwerpen die goed bij de markt past was de echte uitdaging voor dit project. Tevens heb ik een systeem ontwikkeld voor de fietsenmaker waar klanten afspraken kunnen plannen.
                </p>
                <a class="btn btn-primary" href="https://stud.hosted.hr.nl/0944889/fietsenmakerij/" target="_blank">Project bekijken</a>
            </div>
        </div>

        <div class="modal fade" id="modalProjectOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Fietsenmakerij</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="portfolio-modal-image" src="storage/portfolio_cover_images/fietsenmakerij_homepage.png" alt="">
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a data-toggle="modal" data-target="#modalProjectTwo" href="">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="storage/portfolio_cover_images/grotekerkplein_homepage.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Grotekerkplein</h3>
                <p>
                    Deze website is ontwikkeld voor de gemeente Rotterdam. Met een team zijn wij aan de slag gegaan om ervoor te zorgen dat een plein in Rotterdam weer wat levendiger gemaakt kon worden.
                </p>
                <p>
                    Er is een project neergezet waardoor er levend pong gespeeld kon worden op het Grotekerkplein en dit kon op de website live bekeken worden via Twitch.
                    Wat ook op de website bekeken kon worden waren de evenementen die georganiseerd werden door de gemeente. Deze werden live gehaald via een api.
                </p>
                <a class="btn btn-primary" href="https://stud.hosted.hr.nl/0944889/grotekerkplein/" target="_blank">Project bekijken</a>
            </div>
        </div>

        <div class="modal fade" id="modalProjectTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Grotekerkplein</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="portfolio-modal-image" src="storage/portfolio_cover_images/grotekerkplein_homepage.png" alt="">
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        <hr>
    </div>

@endsection
