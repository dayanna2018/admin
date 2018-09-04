@extends('layouts.sipsa')

@section('main')
<div class="container mt-5 p-5">
        <!-- Inicio Slider -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data- target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt="First slide [800x400]" src="img/001.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide [800x400]" src="img/002.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Third slide [800x400]" src="img/003.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Third slide [800x400]" src="img/004.jpg">
                </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h2>Implementación de las TIC
                    <br> en los procesos de joyería</h2>
                <p class="p-caption">Aumente la productividad de su equipo de trabajo,
                    <br> ahorre tiempo, materia prima y proteja el medio ambiente.
                    <br>
                </p>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection
