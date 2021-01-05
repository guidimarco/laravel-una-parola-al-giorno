@extends('layouts.app')

@section('title', 'Un\'avventura nelle meraviglie dell\'italiano - Una parola al giorno')

@section('main')
    <main>
        <!-- carousel: main offer -->
        <section id="main-carousel">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>

        <!-- presentation -->
        <section id="brand-description">
            <div class="container">
                <div class="row">
                    <p><strong>Una parola al giorno</strong> è il primo sito che ti accompagna attraverso le meraviglie dell'italiano per arricchire vocabolario e pensiero. Iscriviti per ricevere quotidianamente via mail nuovi vocaboli, noti e meno noti, spiegati e commentati.</p>

                    <p>Imparare a sfruttare appieno le parole ci permette di evolvere sotto un profilo spesso trascurato: <strong>la qualità della comunicazione</strong>, con noi stessi e con gli altri.</p>
                </div>
            </div>
        </section>

        <!-- parola del giorno -->
        <section id="parola-del-giorno">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Nolente</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xs-12 btn-container">
                        <a href="#" class="btn">Leggi Nolente</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- parola vecchie -->
        <section id="parole-vecchie">
            <div class="container">
                <div class="row">
                    <!-- parole vecchie -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 altre-parole">
                        <a href="#"><h3>Valzer</h3></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 altre-parole">
                        <a href="#"><h3>Circa</h3></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 altre-parole">
                        <a href="#"><h3>Abate</h3></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 altre-parole tutte-le-parole">
                        <a href="#"><h3>Tutte le parole</h3></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ultime notizie -->
        <section id="home-news">
            <div class="container">
                <div class="row">
                    <!-- title -->
                    <div class="title col-xs-12">
                        <h2>Ultimi articoli - </h2>
                        <img src="https://unaparolaalgiorno.it/_nuxt/img/mercurio.311a077.png" alt="il mercurio">
                    </div>

                    <!-- all-news -->
                    <div class="col-xs-12 col-md-4">
                        <div class="news-card">
                            <h3>titolo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="news-card">
                            <h3>titolo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="news-card">
                            <h3>titolo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <!-- link to all articles -->
                    <div class="col-xs-12 see-all-news-link">
                        <a href="#">Vedi tutti gli articoli >></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
