<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/funciones.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/sweetalert2.all.min.js') }}" type="text/javascript"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Balance</title>
    <link rel="icon" href="favicon-tic.png" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon-tic.png" type="image/x-icon" />
</head>

<body>
    <nav class="headerPage navbar navbar-expand-xl navbar-light bg-light">
        <div class="row w-100">
            <div class="col-sm-11 col-md-11 col-lg-11 col-xl-12">
                <div class="row p-3" style="color: #000;">
                    <div class="w-100 row">
                        <a class="col-md-auto mx-auto" href="/home" style="justify-content: center;display: grid;">
                            <img src="{{ asset('img/favicon-tic.png')}}" class="mx-auto" style="max-width: 70px;width: 100%;">
                        </a>
                        <div class="col titleProyect">
                            <h5>Your fuck proyect</h5>
                            <p>I love programming</p>
                        </div>
                        <div class="mx-auto">
                            <div class="container">
                                <div class="row">
                                    <div class="col my-auto imageHead">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-auto mx-auto my-auto">
                                                    <img src="{{ asset('img/favicon-tic.png')}}" class="m-1" style="max-width: 100px;min-width: 60px;">
                                                </div>
                                                <div class="col-auto mx-auto my-auto">
                                                    <img src="{{ asset('img/favicon-tic.png')}}" class="m-1" style="max-width: 100px;min-width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: -2%">
                        <div class="navbar-collapse collapse" id="navbarColor01">
                            <ul class="list-group-flush navbar-nav nav-tabs mx-auto">
                                <li class="list-group-item dropdown btn-group text-center text-xl-left">
                                    <a class="nav-link btn" href="{{ route('admin') }}" id="dashboardNav" style="display: inline-block;">
                                        Dashboard
                                    </a>
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: inline-block;opacity:0.9;">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu text-center text-xl-left" aria-labelledby="dashboardNav">
                                        <a class="btn dropdown-item border-bottom" href="{{ route('admin') }}">More</a>
                                        <a class="btn dropdown-item border-bottom" href="{{ route('admin') }}">More</a>
                                        <a class="btn dropdown-item" href="{{ route('admin') }}">More</a>
                                    </div>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
            <button class="col-sm-1 col-md-1 col-lg-1 navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
    <!-- container-fluid -->
    <div class="main mainPage" id="contenedor_formulas">
        <div class="container mt-4">
            @yield('main')
        </div>
    </div>
    <!-- main -->
    <!-- footer-fixed-bottom -->
    <div class="container-fluid footerPage">
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
        console.log($(".list-group-item.dropdown"));
        $(".list-group-item.dropdown").hover(function(){
            /* $(this).dropdown('show')
            }, function(){
            $(this).dropdown('hide') */
        });
    </script> 
    @if (Request::is('admin') || Request::is('admin/*'))
        <script>
            $('#dashboardNav').addClass('active')
        </script> 
    @endif 
</body>

</html>