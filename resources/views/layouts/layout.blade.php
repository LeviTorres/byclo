<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | BycloStudio</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/031c2785bc.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <header>
            <nav class="menu">
                <label class="logo">BYCLO</label>
                <div class="container_menu" id="menu">
                    <ul class="menu_items">
                        <li><a href="#">CONOCE A NUESTROS COACHES</a></li>
                        <li><a href="#">RESERVAR</a></li>
                        <li><a href="#">¡CONTÁCTANOS!</a></li>
                    </ul>
                    <i class="fas fa-user-circle"></i>
                </div>
                <span class="btn_menu" id="btn_menu">
                    <i class="fas fa-bars"></i>
                </span>
            </nav>
        </header>
        @yield('content')
        <footer>
            <div class="container_footer">
                <div class="footer_items">
                    <div class="information">
                        <p class="first">BYCLO</p>
                        <p class="second">(33) <strong>3611-2570</strong></p>
                        <p class="third">ACUEDUCTO 3413 - COLINAS DE SAN JAVIER
                            <br> ZAPOPAN, JAL</p>
                    </div>
                    <div class="social">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div class="copy">
                    <p>&#169 Derechos reservados BYCLO 2022</p>
                </div>
            </div>
        </footer>
    </body>
</html>