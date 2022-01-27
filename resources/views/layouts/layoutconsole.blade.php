<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | BycloStudio</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
        <script src="https://kit.fontawesome.com/031c2785bc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/appconsole.css')}}">
        <script src="{{asset('js/appconsole.js')}}" defer></script>
    </head>
    <body>
        <div class="row m-0 p-0">
            <div class="col-4 m-0 p-0 sidebar">
                <div class="sidebar-title">
                    <span>BYCLO</span>
                </div>
                
                <div class="sidebar-items">
                    <ul>
                        <li><a href="/console"><i class="fas fa-calendar"></i>CLASES</a></li>
                        <li><a href="#"><i class="fas fa-calendar"></i>CITAS</a></li>
                    </ul>
                </div>
                <div class="sidebar-login">
                    <p><i class="fas fa-user"></i>JUAN PEREZ</p>
                    <hr>
                    <p><a href=""><i class="fas fa-sign-out-alt"></i>CERRAR SESIÓN</a></p>
                </div>
            </div>
            <div class="col m-0 p-0">
                <header>
                    <div class="navbar-title">
                        <span>BYCLO</span>
                    </div>
                    <div class="navbar-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                </header>
                @yield('content')
            </div>
        
        </div>
        
            
           
        

        
        
    </body>
</html>