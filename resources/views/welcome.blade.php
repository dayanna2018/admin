@extends('layouts.app')

@section('content')
        <div class="container mt-5 p-5">
                <div class="container">
                    <a class="btn m-2 btn-primary form-control btn-sm btn-min-block" href="login">Iniciar Sección</a>
                    <a class="btn m-2 btn-success form-control btn-sm btn-min-block" href="register">Registrar</a></div>
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
    
@endsection