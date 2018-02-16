<?php

namespace App\Http\Controllers;

use App\Entrada;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class EntradaController extends Controller
{
    function index($tipo,$subtipo){
        $padre=$this->padre($tipo);
        $entradas=Entrada::where('tipo',$tipo)
            ->where('subtipo',$subtipo)
            ->orderBy('inicio_evento')
            ->get();
        $titulo=$padre->nombre.' '.trans('validation.attributes.'.$subtipo);
        return view('entradas.'.$padre->plantilla,compact('padre','entradas','tipo','subtipo','titulo'));
    }
    function editar($tipo,$subtipo,$id){
        $entrada=Entrada::findOrFail($id);
        $padre=$this->padre($tipo);
        return view('entradas.editar',compact('tipo','subtipo','entrada','padre'));
    }
    function actualizar(Request $request,$tipo,$subtipo,$id){
        $entrada=Entrada::findOrFail($id);
        $entrada->fill($request->all());
        $entrada->save();
        $entrada->guardaImagen($request->file('foto'));
        Alert::success('La entrada ha sido correctamente actualizada');
        return redirect()->route('entradas',[$tipo,$subtipo]);
    }
    function nueva($tipo,$subtipo){
        $padre=$this->padre($tipo);
        return view('entradas.nueva',compact('tipo','subtipo','padre'));
    }
    function guardar(Request $request,$tipo,$subtipo){
        //dd($request->all());
        $entrada=new Entrada();
        $entrada->fill($request->all());
        $entrada->save();
        $entrada->guardaImagen($request->file('foto'));
        Alert::success('La <b>entrada</b> ha sido correctamente <b>creada</b>');
        return redirect()->route('entradas',[$tipo,$subtipo]);
    }
    function padre($tipo){
        return Entrada::where('tipo',$tipo)
            ->where('padre','1')
            ->first();
    }
    function agregarImagen(Request $request,$tipo,$subtipo){
        $entrada=Entrada::findOrFail($request->id_modal);
        $entrada->guardaImagen($request->file('foto'));
        Alert::success('Se ha <b>agregado</b> correctamente la <b>imagen</b>');
        return redirect()->route('entradas',[$tipo,$subtipo]);

    }
    function eliminarImagen(Request $request,$tipo,$subtipo){
        unlink('.'.$request->foto);
        Alert::warning("Ha <b>eliminado</b> de forma permanente la imagen de la <b>Entrada</b>");
        return redirect()->route('entradas',[$tipo,$subtipo]);

    }
}
