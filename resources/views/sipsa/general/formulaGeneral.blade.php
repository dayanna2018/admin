@extends('layouts.sipsa')

@section('main')
<style>
        .hide {
            display: none !important;
        }
    </style>
    <div class="container-fluid contenedor">
        <div id="head_densidad">
            <div class="container-fluid p-3" style="">
                <div class="container-fluid">
                    <h4 style="padding-left: 20px;">Procesos de Microfusion</h4>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-xl-6 center-block align-self-center">
                            <div class="card-body row center-block">
                                <div class="container">
                                    <div class="row">
                                        <div class="mx-auto col-12 center-block gris">
                                            <div class="container mb-3">
                                                <div style="text-align:center;" class="-3">
                                                    <div class="form-row m-3">
                                                        <div class="form-group mx-auto">
                                                            <select class="form-control" id="color" data-style="btn-primary">
                                                                <option>Seleccionar</option>
                                                                <option value="1">Blanco</option>
                                                                <option value="2">Rojo</option>
                                                                <option value="3">Rosado</option>
                                                                <option value="4">Amarillo</option>
                                                                <option value="5">Verdoso</option>
                                                                <option value="6">Verde</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mx-auto">
                                                            <select class="form-control" id="kilates" data-style="btn-primary">
                                                                <option>Seleccionar</option>
                                                                <option value="20">20-Kilates</option>
                                                                <option value="18">18-Kilates</option>
                                                                <option value="16">16-Kilates</option>
                                                                <option value="14">14-Kilates</option>
                                                                <option value="12">12-Kilates</option>
                                                                <option value="10">10-Kilates</option>
                                                                <option value="6">6-Kilates</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hideReg form-group">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <input class="form-control m-2" type="number" id="cantidadGr" placeholder="Ingrese la cantidad de Gramos">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <button type="button" id="btnSelectColor" class="btn btn-primary form-control m-2">Calcular</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <li id="oro" class="list-group-item d-flex justify-content-between align-items-center hide ">
                                                        Oro
                                                        <span id="oroC" class="badge badge-primary badge-pill">1 g</span>
                                                    </li>
                                                    <li id="plata" class="list-group-item d-flex justify-content-between align-items-center hide">
                                                        Plata
                                                        <span id="plataC" class="badge badge-primary badge-pill">- g</span>
                                                    </li>
                                                    <li id="cobre" class="list-group-item d-flex justify-content-between align-items-center hide">
                                                        Cobre
                                                        <span id="cobreC" class="badge badge-primary badge-pill">- g</span>
                                                    </li>
                                                    <li id="paladio" class="list-group-item d-flex justify-content-between align-items-center hide">
                                                        Paladio
                                                        <span id="paladioC" class="badge badge-primary badge-pill">- g</span>
                                                    </li>
                                                </ul>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="center-block mt-2" style="text-align: center;">
                                    <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false"
                                        aria-controls="multiCollapseExample2">Ver tabla ⤵</button>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="center-block mt-2">
                                            <div class="mx-auto col-12 center-block pl-5 pr-5">
                                                <img src="{{ asset('img/aleaciones-00.png')}}" id="ImgMicro" href="{{ asset('img/aleaciones-00.png')}}" class="img-thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-xl-6" style="">
                            <div style="background-color: #525252;padding:10px;color: #fff;">
                                <center>
                                    <label>
                                        <h5>Seleccionar Tipo de Aleación</h5>
                                    </label>
                                </center>
                            </div>
                            <a href="{{ route('generalPura') }}" class="btn mt-3 generalPura btn-primary col-md-12">Pura</a>
                            <a href="{{ route('generalBinaria') }}" class="btn mt-3 generalBinaria btn-primary col-md-12">Binaria</a>
                            <a href="{{ route('generalTerciaria') }}" class="btn mt-3 generalTerciaria btn-primary col-md-12">Terciaria</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contenedor_densidades">
                    @if (Request::is('formulaGeneral/generalPura'))
                        @include('sipsa.general.generalPura')
                        <script>
                            $('.generalPura').addClass('active')
                        </script>
                    @endif
                    @if (Request::is('formulaGeneral/generalBinaria'))
                        @include('sipsa.general.generalBinaria')
                        <script>
                            $('.generalBinaria').addClass('active')
                        </script>
                    @endif
                    @if (Request::is('formulaGeneral/generalTerciaria'))
                        @include('sipsa.general.generalTerciaria')
                        <script>
                            $('.generalTerciaria').addClass('active')
                        </script>
                    @endif
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
    <script>
    $('#ImgMicro').fancybox({
      afterLoad: function (instance, current) {
        var pixelRatio = window.devicePixelRatio || 1

        if (pixelRatio > 1.5) {
          current.width = current.width / pixelRatio

          current.height = current.height / pixelRatio
        }
      }
    })
    </script>
@endsection