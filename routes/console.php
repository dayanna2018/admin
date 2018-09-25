<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

//$professions = DB::select('SELECT id FROM profesiones WHERE title= ? LIMIT 0,1', ["Desarrollador Backend"]);

/*$profesion = DB::table('professions')->select('id')->first();

DB::table('users')->insert([
    'name' => 'Nombre 1',
    'email' => 'correo@correo.com',
    'password' => bcrypt('laravel'),
    'profession_id' => $profession->first()->id
]);
*/