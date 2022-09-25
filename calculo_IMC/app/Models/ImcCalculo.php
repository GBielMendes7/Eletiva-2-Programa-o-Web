<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImcCalculo extends Model
{
    function CalculoImc(){
        $Peso = $_GET["peso"];
        $Altura = $_GET["altura"];

        $imc = $Peso / $Altura**2;

        return $imc;
       
    }

}