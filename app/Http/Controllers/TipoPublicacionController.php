<?php

namespace App\Http\Controllers;
use App\TipoPublicacion;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class TipoPublicacionController extends Controller
{
    public function index(){
        $tipos = TipoPublicacion::all();
        return view('tipo_publicacion.index',compact('tipos'));
    }
    public function nueva(){
        return view('tipo_publicacion.nueva');
    }
    public function editar($id){
        $tipo = TipoPublicacion::findOrFail($id);
        return view('tipo_publicacion.editar',compact('tipo'));
    }
    public function actualizar(Request $request,$id){
        $tipo = TipoPublicacion::findOrFail($id);
        $tipo->fill($request->all());
        $tipo->save();
        \Alert::success('El tipo de publicación se ha actualizado correctamente');
        return redirect()->route('tipo-publicacion.lista');
    }
    public function guardar(Request $request){
        $tipo = new TipoPublicacion();
        $tipo->fill($request->all());
        $tipo->save();
        \Alert::success('Se ha guardado el tipo de publicacion: ' . $request->nombre);

        return redirect()->route('tipo-publicacion.lista');
    }
}
