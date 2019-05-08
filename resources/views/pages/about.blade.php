@extends('layouts.container')

@section('content')

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Over mij</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Techniek</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Mijn cv</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane no-border fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container-fluid spacing bg-1 text-center no-border">
                <h3 class="padding-sm">Wie ben ik?<h3>
                <img src="storage/files/profile.png" class="img-circle" alt="profile">
                <div class="row">
                    <h6 class="padding-sm col-lg-4" style="margin-bottom: 0.5rem; text-align: left;">Ik ben een Creative Media & Game Technologies student aan de Hogeschool Rotterdam. Ik zit nu in mijn tweede leerjaar en ik ben op zoek naar een meewerkstage die begint in aankomend september.</h6>
                    <h6 class="padding-sm col-lg-4" style="text-align: left;">Op mijn opleiding leer ik alles over het worden van een creatieve webdeveloper. Van onderzoek doen naar de doelgroep, tot het uitwerken van een back-end systeem. Het leuke hieraan is dat ik veel leer op het gebied van techniek en creatiteit.</h6>
                    <h6 class="padding-sm col-lg-4" style="text-align: left;">In mijn vrije tijd vind ik het leuk om te werken aan mijn eigen project, denk hierbij aan deze website waar ik continue aan kan blijven werken. Ook vind ik het niet verkeerd om een potje te gamen als ik tijd over heb in de week.</h6>
                </div>
            </div>
        </div>
        <div class="tab-pane no-border fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container-fluid spacing bg-2 text-center">
                <h3 class="padding-sm">Waar heb ik ervaring mee?</h3>

                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="padding-sm">Front-end:</h5>
                        <ul style="list-style: none; padding-inline-start: 0;">
                            <li>HTML5</li>
                            <li>Blade</li>
                            <li>CSS</li>
                            <li>SASS</li>
                            <li>Bootstrap</li>
                            <li>Materialize</li>
                            <li>JavaScript</li>
                            <li>TypeScript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="padding-sm">Back-end:</h5>
                        <ul style="list-style: none; padding-inline-start: 0;">
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>NodeJS</li>
                            <li>SQL</li>
                            <li>Express</li>
                            <li>Nginx</li>
                            <li>API's</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="padding-sm">Extra:</h5>
                        <ul style="list-style: none; padding-inline-start: 0;">
                            <li>GIT</li>
                            <li>Bash</li>
                            <li>Wordpress</li>
                            <li>Adobe Photoshop</li>
                            <li>Adobe Illustrator</li>
                            <li>Adobe XD</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane no-border fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="container" style="display: inline-flex;">
                <div class="header spacing">
                    <p class="banner-text-h1 header-text">
                        <a href="storage/files/berend_kalberg_cv.pdf" class="button" download><i class="material-icons">cloud_download</i>Download mijn cv</a>
                    </p>
                </div>
            </div>
            <div class="container-fluid  spacing bg-3 text-center">
                <embed src="storage/files/berend_kalberg_cv.pdf#view=FitH" type="application/pdf" width="100%" height="600px"/>
            </div>
        </div>
    </div>

@endsection
