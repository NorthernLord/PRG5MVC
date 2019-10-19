@extends('layouts.app')

@section('content')

<!-- Banner -->

<div class="pos-relative">
    <div class="banner"></div>
    <div class="banner-text">
        <h1 class="banner-text-h1">Creative Media & Game Technologies Student</h1>
        <hr style="background-color: white">
        <h2 class="banner-text-h2">Probeer altijd het beste eruit te halen</h2>
    </div>

    <a href="#index-content">
        <div class='icon-scroll'></div>
    </a>
</div>

    <!-- Page Content -->
    <div class="container">

        <section id="index-content">

            <!-- Page Heading -->
            <div class="spacing header index">
                <i class="material-icons">build</i><span class="banner-text-h1 header-text">Uitgelichte projecten</span>
            </div>

            <!-- Project One -->
            <div class="row spacing">
                <div class="col-md-7">
                    <img class="img-fluid mb-3 mb-md-0" src="storage/portfolio_cover_images/fietsenmakerij_homepage.png" alt="">
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

            <hr class="active">

            <!-- Project Two -->
            <div class="row spacing">
                <div class="col-md-7">
                        <img class="img-fluid mb-3 mb-md-0" src="storage/portfolio_cover_images/grotekerkplein_homepage.png" alt="">
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

            <hr class="active">

        </section>
    </div>

@endsection
