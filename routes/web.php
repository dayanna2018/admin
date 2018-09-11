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
 
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes... 
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'RecursosController@index')->name('admin');
Route::get('/deleteUser/{id}', 'AdminController@deleteUser')->where('id', '[0-9]+')->name('deleteUser');
Route::post('/showUser', 'AdminController@showUser')->where('id', '[0-9]+')->name('showUser');
Route::post('/registerAdmin', 'AdminController@register')->name('registerAdmin');
Route::post('/updateUser', 'AdminController@updateUser')->name('updateUser');

Route::get('/admin/recursos', 'RecursosController@showUser')->name('mostrarRecursosActivos');
Route::post('/admin/ajax', 'RecursosController@showUserAjax')->name('mostrarRecursosActivosAjax');
Route::get('/admin/recursosInac', 'RecursosController@showUserInac')->name('mostrarRecursosInactivos');
Route::get('/admin/habilidades','HabilidadesController@show')->name('mostrarHabilidades');
Route::get('/admin/cargos','CargosController@show')->name('mostrarCargos');
Route::get('/recursos/agregar','RecursosController@addResource')->name('addRecurso');
Route::post('/recursos/agregar/new','RecursosController@addingResource')->name('addingRecurso');

