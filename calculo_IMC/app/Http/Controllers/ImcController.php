<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcCalculo;

class ImcController extends Controller
{
    
    public function index() {
        return view('Imc');
    }

    public function gasto() {
        $CalculoImc = new ImcCalculo();

        $valor = $CalculoImc->CalculoImc();

        return view('resultado', ['valor'=>$valor]);
    }
}
