<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veiculo;

class EstoqueController extends Controller
{
    public function index(){

        $veiculos = Veiculo::all();

        return view('site.estoque', compact('veiculos') );
    }
        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        return view('areaadm.veiculomanager.show',compact('veiculo'));
    }
}