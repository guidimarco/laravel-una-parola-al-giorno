@extends('layouts.app')

@section('title', 'Un\'avventura nelle meraviglie dell\'italiano - Una parola al giorno')

@section('main')
    <main>
        <!-- carousel: main offer -->
        <section id="promo-carousel">
            <!-- promo container, with card + dots + narrow -->
            <div class="promo-container">

                <!-- left arrow -->
                <div class="arrow-left">
                    <i class="fas fa-angle-left fa-3x"></i>
                </div>

                <!-- right arrow -->
                <div class="arrow-right">
                    <i class="fas fa-angle-right fa-3x"></i>
                </div>

                <!-- btm: dots -->
                <div class="dots">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>

                <!-- single promo: dante - background + img + btn -->
                <div class="promo-card promo-dante"
                    style="background-color: #D92929; background-image: url('https://unaparolaalgiorno.it/_nuxt/img/memphis-mini.33545ec.png')">

                    <!-- book cover -->
                    <img src="https://v3.unaparolaalgiorno.it/uploads/prodotti/h-dan.png" alt="libro dante libera tutti"
                        style="width: 50%; max-width: 250px; max-height: 50%;">

                    <!-- book description img -->
                    <img src="https://unaparolaalgiorno.it/_nuxt/img/dante-sub.0b917dc.svg" alt="scritta promozionale libro"
                        style="max-width: 200px; max-height: 20%;">

                    <div class="btn btn-promo shine">
                        Scoprilo subito
                    </div>
                </div><!-- end promo: dante -->

                <!-- single promo: log-in - background + img + btn -->
                <div class="promo-card promo-log-in active"
                    style="background-color: rgb(33, 49, 76); background-image: url('https://unaparolaalgiorno.it/_nuxt/img/subtle_white_feathers.9f3d284.jpg')">

                    <!-- title -->
                    <img src="https://unaparolaalgiorno.it/_nuxt/img/main-title.40a5f51.svg" alt="avventura magnifica italiano"
                        style="max-width: 50%; max-height: 50%;">

                    <!-- title -->
                    <img src="https://unaparolaalgiorno.it/_nuxt/img/main-sub.8ae538c.svg" alt="titolo pagina web"
                        style="max-width: 50%; max-height: 50%;">

                    <div class="btn-container">
                        <div class="btn btn-promo btn-google">
                            Accedi con <strong>Google</strong>
                        </div>

                        <div class="btn btn-promo btn-facebook">
                            Accedi con <strong>Facebook</strong>
                        </div>
                    </div>
                </div><!-- end promo: log-in -->

                <!-- single promo: la bottega - background + img + btn -->
                <div class="promo-card promo-bottega"
                    style="background-color: #2eafc3; background-image: url('https://unaparolaalgiorno.it/_nuxt/img/grey.74f7cdf.png')">

                    {{-- <!-- book cover -->
                    <img src="https://v3.unaparolaalgiorno.it/uploads/prodotti/h-dan.png" alt="libro dante libera tutti"
                        style="width: 50%; max-width: 250px; max-height: 50%;">

                    <!-- book description img -->
                    <img src="https://unaparolaalgiorno.it/_nuxt/img/dante-sub.0b917dc.svg" alt="scritta promozionale libro"
                        style="max-width: 200px; max-height: 20%;">

                    <div class="btn btn-promo shine">
                        Scoprilo subito
                    </div> --}}
                </div><!-- end promo: la bottega -->

                <!-- single promo: parole difficili - background + img + btn -->
                <div class="promo-card promo-par-difficili"
                    style="background-color: #00897b; background-image: url('https://unaparolaalgiorno.it/_nuxt/img/subtle_white_feathers.9f3d284.jpg')">

                    {{-- <!-- book cover -->
                    <img src="https://v3.unaparolaalgiorno.it/uploads/prodotti/h-dan.png" alt="libro dante libera tutti"
                        style="width: 50%; max-width: 250px; max-height: 50%;">

                    <!-- book description img -->
                    <img src="https://unaparolaalgiorno.it/_nuxt/img/dante-sub.0b917dc.svg" alt="scritta promozionale libro"
                        style="max-width: 200px; max-height: 20%;">

                    <div class="btn btn-promo shine">
                        Scoprilo subito
                    </div> --}}
                </div><!-- end promo: parole difficili -->
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
