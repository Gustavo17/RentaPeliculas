<?php

namespace cinema\Http\Controllers;


class PruebaController extends Controller
{


   

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function index()
    {
        return "Hola desde Controlador";
    }
    public function nombre($nombre){
        return 'Mi nombre es '. $nombre
    }
}
