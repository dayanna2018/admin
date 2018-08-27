<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <!--  @section('menu')
        Contenido menu
    @show
    <div class="container">
        @yield('content')
    </div>
    <p>ejemplo</p>
    <div class="container-fluid">
        @yield('otro')
    </div>-->

    <div class="container">
        <h1>Proyecto inicial</h1>
        <hr>
    </div>
    <div id="wrapper" cclass="toggled">
        <!-- Este es el codigo del sidebar-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-nav">
                    <a href="">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="">dashboard</a>
                </li>
                <li>
                    <a href="">d</a>
                </li>
                <li>
                    <a href="">d</a>
                </li>
                <li>
                    <a href="">d</a>
                </li>
                <li>
                    <a href="">d</a>
                </li>
            </ul>
        </div>
        <!-- Este es el contenido de la pagina -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quae? Nam pariatur cumque nostrum recusandae quo vitae nihil dignissimos dolores vel illo expedita fugit qui, quidem explicabo enim cum rem!
                        </p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-togle">Toggle Menu</a>

                    </div>
                </div>
            </div>
        </div>
    <!-- Aqui termina el contenido de la pagina -->
    </div>
  
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    <script>
    $("#menu-toggle").click(function(e){
        e.preventDefault();
        $("wrapper").toggleClass("toggled");
    });
    </script>


</body>
</html>