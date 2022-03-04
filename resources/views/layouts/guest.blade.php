
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Novaz - Developing the future, Digital Agency that develope brand, websites, e-commerce nad social media" />
        <meta name="author" content="Daniel Leal Freitas" />
        <meta name="robots" content="all, index, follow" />

        
        <title>Novaz - Developing the future of the web @yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    </head>
    <style>
        header.masthead {
            background-image: url("../img/header-bg.jpg");
        }
        section#contact {
            background-image:url("../img/map-image.png"); 
}

    </style>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-novaz.svg') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                      


                        @if (Route::has('login'))
                       
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('brand') }}#brand">Brand & Logo</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('webdesign') }}#webdesign">WebDesign</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('socialmedia') }}#social_media">Social Media</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ url('brand') }}#brand">Brand & Logo</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('webdesign') }}#webdesign">WebDesign</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('socialmedia') }}#social_media">Social Media</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>
        
                                @if (Route::has('register'))
                                    <li class="nav-item"><a  class="nav-link"href="{{ route('register') }}" >Register</a></li>
                                @endif
                            @endauth
                        
                    @endif

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

        
        {{ $slot }}

         <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <!-- Core theme JS-->
         <script src="{{ mix('js/app.js') }}" defer></script>
     </body>
 </html>
 
