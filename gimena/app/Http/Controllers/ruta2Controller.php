<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ruta2Controller extends Controller
{
    /**
     * Muestra la vista correspondiente a /ruta3.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ruta2()
    {
        return view('ruta2');
    }
    
}
