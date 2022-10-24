<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $vendedors = Vendedor::all();

        return view('site.home', compact('vendedors') );
    }
}
