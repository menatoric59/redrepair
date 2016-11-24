<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
class EstadoController extends Controller
{
    public function json(){
    	return DB::table('estados')
        ->orderBy('Nombre')
        ->pluck('nombre','id')
        ->toArray();
    }
}
