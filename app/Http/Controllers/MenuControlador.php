<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuControlador extends Controller
{
    public function opcGaleria()
    {
        return view('Galeria');
    }
    public function perfil()
    {
        return view('Perfil');
    }
}
