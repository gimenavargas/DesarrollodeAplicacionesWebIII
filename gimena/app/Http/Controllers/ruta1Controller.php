<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ruta1Controller extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ruta1()
    {
        return view('ruta1');
    }
    
}
