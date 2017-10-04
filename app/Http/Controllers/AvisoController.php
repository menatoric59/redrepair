<?php

namespace App\Http\Controllers;

use App\Aviso;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    function index(){
        $avisos = Aviso::where('inicio','>=',getdate())->get();
        //dd($avisos->get());
        return view('avisos.index',compact('avisos'));
    }
    function lista(){
        $avisos = Aviso::where('inicio','>=',getdate())->get();
        return view('avisos.index',compact('avisos'));
    }
    function nuevo(){
        return view('avisos.nuevo');
    }
    function guardar(Request $request){
        //dd($request->all());
        $aviso = new Aviso;
        $this->validate($request,[
            'foto' => 'required',
            'tipo'=>'required',
            'descripcion'=>'required',
            'inicio'=>'required',
            'fin'=>'required'
        ]);
        $aviso->fill($request->all());
        $aviso->save();
        $aviso->guardaImagen($request->file('foto'));
        \Alert::success()->html("<i class='fa fa-check-circle'></i> El <b>AVISO</b> ha sido correctamente creado");
        return redirect()->route('avisos');
    }
    public function editar($id){
        $aviso = Aviso::find($id);
        return view('avisos.editar',compact('aviso'));
    }
    public function actualizar($id, Request $request){
        $aviso = Aviso::find($id);

        $this->validate($request,[
            'tipo'=>'required',
            'descripcion'=>'required',
            'inicio'=>'required',
            'fin'=>'required'
        ]);
        $aviso->fill($request->all());
        $aviso->save();
        $aviso->guardaImagen($request->file('foto'));
        \Alert::success()->html("<i class='fa fa-check-circle'></i> El <b>AVISO</b> ha sido correctamente actualizado");
        return redirect()->route('avisos');
    }
}
