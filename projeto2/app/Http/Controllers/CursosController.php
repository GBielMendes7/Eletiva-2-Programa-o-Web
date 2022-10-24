<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::all();

        return view('site.cursos', compact('cursos') );
    }
}