<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- <title>{{ config('app.name', 'Laravel') }}</title>-->

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
    <style>
        .item1 { grid-area: lpvc; }
        .item2 { grid-area: actualite; }
        .item3 { grid-area: lfa; }
        .contenu{
            display: grid;
            grid-template-areas:
            'lpvc'
            'actualite actualite actualite actualite '
            'lfa';
            grid-gap: 10px;
            background-color: transparent;
            padding: 10px;
        }
        .navbar{
            font-size: 15px;
            color: whitesmoke !important;
        }
        .b{
            font-family: Verdana, Geneva, Tahoma, sans-serif !important ;
        }
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

            .onoffswitch3{
                position: relative; 
                -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
            }

            .onoffswitch3-checkbox {
                display: none;
            }

            .onoffswitch3-label {
                display: block; overflow: hidden; cursor: pointer;
                border: 0px solid #999999; border-radius: 0px;
            }

            .onoffswitch3-inner {
                display: block; width: 200%; margin-left: -100%;
                -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
                -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
            }

            .onoffswitch3-inner > span {
                display: block; float: left; position: relative; width: 50%; height: 30px; padding: 0; line-height: 30px;
                font-size: 14px; color: white; font-family: 'Montserrat', sans-serif; font-weight: bold;
                -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
            }

            .onoffswitch3-inner .onoffswitch3-active {
                padding-left: 10px;
                background-color: #EEEEEE; color: #FFFFFF;
            }

            .onoffswitch3-inner .onoffswitch3-inactive {
                width: 100px;
                padding-left: 16px;
                background-color: #EEEEEE; color: #FFFFFF;
                text-align: right;
            }

            .onoffswitch3-switch {
                display: block; width: 50%; margin: 0px; text-align: center; 
                border: 0px solid #999999;border-radius: 0px; 
                position: absolute; top: 0; bottom: 0;
            }
            .onoffswitch3-active .onoffswitch3-switch {
                background: #27A1CA; left: 0;
                width: 160px;
            }
            .onoffswitch3-inactive{
                background: #A1A1A1; right: 0;
                width: 20px;
            }
            .onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
                margin-left: 0;
            }

            .glyphicon-remove{
                padding: 3px 0px 0px 0px;
                color: #fff;
                background-color: #000;
                height: 25px;
                width: 25px;
                border-radius: 15px;
                border: 2px solid #fff;
            }

            .scroll-text{
                color: #000;
            }
    </style>
</head>
<body>
    <div id="app">
            <!-- <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: #006daa;"> -->
            <nav class="navbar navbar-light" style="background-color: #006daa;">
                <div class="container">
                    <div class="sociel-links">
                    <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="https://i.pinimg.com/originals/25/9f/1b/259f1bf84989d07005bad20044448530.png" alt="logo facebook" width="40px" style="border-radius: 50%"> </a> </i>
                            <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="https://picklefeetgames.com/wp-content/uploads/2018/12/twitter-app-icon-transparent-17-2.png" alt="logo twitter" width="40px" style="border-radius: 50%"></a></i>
                            <i class="fab fa-facebook"><a href="https://www.facebook.com/walidessaied9"><img class="profile-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Google_plus_icon.svg/1024px-Google_plus_icon.svg.png" alt="logo google plus" width="40px" style="border-radius: 50%"></a></i>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="  my-2 my-sm-0" type="submit" style="border-radius: 10%"><img src="https://p7.hiclipart.com/preview/928/549/87/magnifying-glass-computer-icons-magnification-loupe.jpg" alt="serch logo" style="width: 30px;height: 30px;"></button>
                            </form>
                </div>
            </nav>
            <div class="test" style="padding-top: 20px;padding-bottom: 20px">               
                        <div class="header-main container" style="display: flex">
                            <h1 class="logo col-md-4 col-sm-4">
                                <table>
                                    <tbody><tr>
                                        <td>
                                            <a href="http://www.mes.tn/" target="_blank"><img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/338px-Flag_of_Tunisia.svg.png" alt="Logo" width="40" height="30"></a>
                                        </td>
                                        <td style="text-align:center;">
                                            <a href="http://www.mes.tn/" target="_blank" style="text-decoration: none"><h6>République Tunisienne<br>&nbsp;&nbsp;&nbsp;&nbsp;Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</h6></a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </h1><!--//logo-->
                            <h1 class="logo col-md-4 col-sm-4">
                                <div class="contact pull-left">
                                    <table style="margin-right:50px;" width="100%">
                                    <tbody><tr>
                                        <td><h6>
                                            <i class="fa fa-phone"></i> +216 72 570 601 
                                        </h6></td>
                                        <td ><h6>
                                            <i class="fa fa-fax"></i> +216 72 572 455
                                        </h6></td>
                                    </tr>
                                    <tr style="text-align: right;">
                                        <td>
                                            <ul class="menu-top navbar-right hidden-xs">
                                                <li class="divider" style="list-style:none;font-size: 12px;"><a href="" style="color: #f4c312;text-decoration: none;">EN</a> | <a href="" style="color: #f4c312;text-decoration: none;">AR</a></li>
                                            </ul>
                                        </td>
                                    </tr><!--//menu-top-->
                                    </tbody></table>
                                </div><!--//contact-->
                            </h1><!--//info-->
                            <h1 class="logo col-md-4 col-sm-4">
                                <table>
                                    <tbody><tr>
                                        <td style="text-align: center;">
                                            <h6><a href="/" target="_blank" style="text-decoration: none">Iset Bizerte</a><br><a href="/" style="text-decoration: none">Institut Supérieur des Etudes Technologiques de Bizerte</a></h6>
                                        </td>
                                        <td>
                                            <a href="/"><img id="logo" src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/41642424_2022159831176528_3378769296233594880_n.jpg?_nc_cat=102&_nc_sid=85a577&_nc_eui2=AeHf-gWi1g66FiMWrBrz5Zc5rai4lWeHzZKtqLiVZ4fNkq_xBswISYtzwb5gegLrbh874Ad6GIT36lgpFT784hR_&_nc_ohc=pYPEBYn2DNQAX9af-x7&_nc_ht=scontent.ftun3-1.fna&oh=3be49a6f6174833568843093d4a52a7c&oe=5EE3CAAB" alt="Logo ISETB" width="53" height="51"></a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </h1><!--//logo-->
                        </div><!--//header-main-->
            </div>
            <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #3ea5de">
                <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Projet_Partenaire_Stage') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link">Accueil</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/nouveaute" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Nouveautés
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/institut" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Institut                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/departement" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Département                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('stage.index') }}" class="nav-link">Offres</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/formation" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Formation                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="/vietude" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vie estudiantines                                        
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/contact" class="nav-link">Contact</a>
                                    </li>
                                    </ul>
                            @auth
                            <ul class="navbar-nav mr-auto">
                                @admin
                                        <li class="nav-item">
                                            <a href="{{ route('etudiant.index') }}" class="nav-link">Etudiant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('stage.index') }}" class="nav-link" >Stage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('societe.index') }}" class="nav-link">Societe</a>
                                        </li>
                                @elseadmin 
                                
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" >Nouveautés</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Institut</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Département</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Formation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Vie estudiantines</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Contact</a>
                                    </li>
                                @endadmin   
                            </ul>
                        @endauth

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
            </nav>
                    <main class="py-4">
                        <div class="container">
                            @yield('content')
                        </div>                        
 
                    </main>
                </div>
</body>
</html>
