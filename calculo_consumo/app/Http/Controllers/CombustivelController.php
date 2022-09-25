<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $calculoDeCombustivel = new CalculoDeCombustivel();

        $valor = $calculoDeCombustivel->calcular();

        return view('resultado', ['valor'=>$valor]);
    }
}
