<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | BycloStudio</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/031c2785bc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <header>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo">BYCLO</label>
                <ul>
                    <li><a href="#">CONOCE NUESTROS COACHES</a></li>
                    <li><a href="#">RESERVAR</a></li>
                    <li><a href="#">¡CONTÁCTANOS!</a></li>
                    <li><a href="#"><i class="fas fa-user-circle"></i></a></li>
                </ul>
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