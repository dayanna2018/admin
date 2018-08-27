<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/personas', function(){
    
    return view('personas', array('nombre'=> 'Javi'));

});
Route::get('/proypers', function(){
    return view('proypers');
});
Route::get('/proyectos', function(){
    return view('proyectos');
});
Route::get('/novedades', function(){
    return view('novedades');
});
Route::get('/persnoved', function(){
    return view('persnoved');
});
Route::get('/cargpers', function(){
    return view('cargpers');
});
Route::get('/cargos', function(){
    return view('cargos');
});
Route::get('/pershabil', function(){
    return view('pershabil');
});
Route::get('/habilidades', function(){
    return view('habilidades');
});
Route::get('/perscontr', function(){
    return view('perscontr');
});
Route::get('/contratos', function(){
    return view('contratos');
});
Route::get('/master', function(){
    return view('master');
});
Route::get('menu', function(){
    return view('menu');
});
