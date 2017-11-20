<?php

namespace App\Http\Controllers;
use App\Aviso;
use App\Reunion;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avisos = Aviso::where('inicio','<=',date('Y-m-d'))
            ->where('fin','>=',date('Y-m-d'))->get();
        $reuniones = Reunion::limit(3)->get();
        return view('index.home',compact('avisos','reuniones'));
    }

    public function seleccionarArchivoDirectorio(){
        return view ('seleccionarArchivoDirectorio');
    }

    public function almacenarDirectorio(Request $request){
        $path = $request->file('directorio')->storeAs('', 'directorio.xlsx');
        dd($request->all());

    }
}
