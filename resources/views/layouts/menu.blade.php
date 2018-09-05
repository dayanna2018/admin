<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/funciones.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/sweetalert2.all.min.js') }}" type="text/javascript"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Admin Assist</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
               <a href="{{Route('admin')}}"><h3>Admin</h3></a>
            </div>

            <ul class="list-unstyled components">
                <p>Operaciones</p>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recursos</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{Route('mostrarRecursosActivos')}}">Activos</a>
                        </li>
                        <li>
                            <a href="{{Route('mostrarRecursosInactivos')}}">Retirados</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#habilidadesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Habilidades</a>
                    <ul class="collapse list-unstyled" id="habilidadesSubmenu">
                        <li>
                        <a href="{{Route('mostrarHabilidades')}}">Ver habilidades</a>
                        </li>
                        <li>
                            <a href="#">Agregar habilidades</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#novedadesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Novedades</a>
                    <ul class="collapse list-unstyled" id="novedadesSubmenu">
                        <li>
                            <a href="">Ver Novedades</a>
                        </li>
                        <li>
                            <a href="#">Agregar Novedad</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#cargosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cargos</a>
                    <ul class="collapse list-unstyled" id="cargosSubmenu">
                        <li>
                            <a href="{{Route('mostrarCargos')}}">Ver Cargos</a>
                        </li>
                        <li>
                            <a href="#">Agregar Cargo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#clientesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clientes</a>                    <ul class="collapse list-unstyled" id="clientesSubmenu">
                        <li>
                            <a href="#">Ver Clientes</a>
                        </li>
                        <li>
                            <a href="#">Agregar Clientes</a>
                        </li>
                    </ul>
                </li>

            </ul>


<!--
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Download source</a>
                </li>
                <li>
                    <a href="#" class="article">Back to article</a>
                </li>
            </ul>
-->
        </nav>

        <!-- Page Content  -->
        
        <div id="content" class="bg-light">
            <nav class="navbar navbar-expand-lg navbar-white bg-white m-2 p-2">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Mostrar / Ocultar</span>
                    </button>
                    <!-- AQUÍ VA EL CONTENIDO DE LA PAGINA, CAMBIA DEPENDIENDO DEL REQUEST(LA VALIDACIÓN SE REALIZA A PARTIR DE LA URL)-->                    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

                @if (Request::is('admin/recursos'))
                    @include('contenido.mostrarRecursos')
                @elseif(Request::is('admin/recursosInac'))
                    @include('contenido.mostrarRecursosInac')
                @else
                    @include('contenido.principal')
                @endif
           </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
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