<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
     public function index()
    {
        return view('juego.index');
    }
    public function calcular()
    {
        $dado1 = rand(1,6);
        $dado2 = rand(1,6);

        $juego = $dado1 + $dado2;
        
        //Estableciendo reglas de validación
        if($juego === 7) {
                return response()->json(['Has ganado el juego']);
        }
        else {
               return response()->json(['Sigue jugando']);
        }

    }
}
