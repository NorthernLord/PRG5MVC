@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Berend Kalberg</h1>
        <p>Op deze website is al mijn werk te vinden, hieronder staan een aantal uitgelichte projecten.</p>
        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Inloggen</a> <a class="btn btn-success btn-lg" href="/register" role="button">Registreren</a></p>
        @endguest
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Uitgelichte projecten</h1>
        <hr>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
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
        <hr>
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
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
                <a class="btn btn-primary" href="https://stud.hosted.hr.nl/0944889/grotekerkplein/">Project bekijken</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
