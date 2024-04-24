<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ruta3Controller extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ruta3()
    {
        return view('ruta3');
    }
   
}
