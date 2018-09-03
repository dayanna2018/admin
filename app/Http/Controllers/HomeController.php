<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function formulaGeneral()
    {
        return view('sipsa.general.formulaGeneral');
    }
    public function densidad()
    {
        return view('sipsa.densidad.densidad');
    }
    public function cera()
    {
        return view('sipsa.cera');
    }
    public function yeso()
    {
        return view('sipsa.yeso');
    }
    public function argolla()
    {
        return view('sipsa.argolla');
    }
    public function cambioDeLey()
    {
        return view('sipsa.cambioDeLey.index');
    }
    public function tubos()
    {
        return view('sipsa.tubos');
    }
    public function ayuda()
    {
        return view('sipsa.ayuda');
    }
}
