<?php

namespace App\Http\Controllers;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
    }

    public function seleccionarArchivoDirectorio(){
        return view ('seleccionarArchivoDirectorio');
    }

    public function almacenarDirectorio(Request $request){
        $path = $request->file('directorio')->storeAs('', 'directorio.xlsx');
        dd($request->all());

    }
}
