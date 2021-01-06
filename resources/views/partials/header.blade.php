<header>
    <!-- top: logo and user access -->
    <div id="header-logo">
        <div class="container">
            <div class="row">
                <!-- sx: brand logo -->
                <div class="logo">
                    <a href="{{ route('home-page') }}">
                        <img src="https://unaparolaalgiorno.it/_nuxt/img/Logo.0d34260.png" alt="brand logo">
                    </a>
                </div>

                <!-- dx: user access -->
                <div class="user-access">
                    <div class="trigger-menu"
                        @click="showMenu = !showMenu">
                        <i class="fas fa-bars"></i>
                    </div>

                    <div class="user-log-in">
                        Accedi
                    </div>

                    <a href="#" class="btn btn-primary">
                        iscriviti
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- hidden-btm: nav menu -->
    <nav id="nav-menu">
        <div class="container">
            <div class="row">
                <!-- sx: menu -->
                <div class="main-menu">
                    <ul :class="showMenu ? 'visible' : ''">
                        <li>
                            <a href="{{ route('progetto') }}">
                                progetto
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                manifesto
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                sfoglia
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                cicli di parole
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                libri
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                articoli
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                contatti
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                collabora
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-special">
                                premium
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                bottega
                            </a>
                        </li>
                        <li class="search-btn">
                            <a href="#">
                                <i class="fas fa-search"></i>
                                cerca
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- dx: search -->
                <div class="search">

                </div>
            </div>
        </div>
    </nav>
</header>
