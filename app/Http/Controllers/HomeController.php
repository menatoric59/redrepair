<?php

namespace App\Http\Controllers;
use App\Aviso;
use App\Reunion;
use Illuminate\Http\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


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
    function prueba(){
        //File::
        //dd(Storage::disk('local'));
        $content = Storage::disk('revista')->get("1.pdf");
        //$content = Storage::get(storage_path('app/public') . "1.pdf");
        $response = response($content);
        $response->header('Content-Type','application/pdf');
        //dd($content);
        return $response;
    }
}
