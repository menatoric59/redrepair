<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
class PublicacionController extends Controller
{
    public function index(){
    	$publicaciones = Publicacion::all();
    	return view('publicaciones.index',compact('publicaciones'));
    }
    public function nueva(){
    	return view('publicaciones.nueva');
    }
}
