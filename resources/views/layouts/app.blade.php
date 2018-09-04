<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <meta charset="UTF-8">
        <link href="{{ asset('bs/principal.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
        <div class="container-fluid" style="border-bottom: solid 3px #fbb03b;">
            <nav class="headerPage navbar navbar-expand-lg navbar-light bg-light">
                <div class="row w-100">
                    <div class="col-sm-11 col-md-11 col-lg-12 col-xl-12">
                        <div class="row p-3 container" style="color: #000;">
                            <div class="w-100 row">
                                <a class="col-md-auto mx-auto" href="/" style="justify-content: center;display: grid;">
                                    <img src="{{ asset('img/favicon-tic.png')}}" class="mx-auto" style="max-width: 70px;width: 100%;">
                                </a>
                                <div class="col-sm-12 col-md-4 titleProyect">
                                    <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h5>
                                    <p>. Doloremque, ad modi fuga excepturi quam, odit tempore illo sed error doloru</p>
                                </div>
                                <div class="mx-auto">
                                    <div class="container">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link " id="register" href="{{ route('register') }}">Registrar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="login" href="{{ route('login') }}">Iniciar Sección</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main mainPage">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="card-body container-fluid">
                    <center>
                        <blockquote class="card-blockquote">
                            <footer>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, pariatur at obcaecati repudiandae incidunt tempora et autem sequi, aperiam a.
                                <cite title="Source Title">ipsum dolor sit amet consectetur adipisicing elit. .</cite>
                            </footer>
                        </blockquote>
                    </center>
                </div>
            </div>
        </div>
        <script>
            $('.navbar-expand-lg').click(function () {
                $('.navbar-collapse').collapse('hide');
            });
        </script>
        <script>
            $('.carousel').carousel()
            $('.nav-link').click(function () {
                $('.navbar-collapse').collapse('hide');
            });
        </script>
         @if (Request::is('register'))
            <script>
                $('#register').addClass('active')
            </script>
        @endif
        @if (Request::is('login'))
            <script>
                $('#login').addClass('active')
            </script>
        @endif
</body>
</html>
