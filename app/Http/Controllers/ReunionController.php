<?php

namespace App\Http\Controllers;

use App\Reunion;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    function index(){
        $reuniones = Reunion::where('inicio','>=',getdate())->get();
        dd($reuniones->get());
        return view('reuniones.index',compact('reuniones'));
    }
    function lista(){
        $reuniones = Reunion::where('inicio','>=',getdate())->orderBy('inicio','desc')->get();

        return view('reuniones.index',compact('reuniones'));
    }
    function nuevo(){
        return view('reuniones.nuevo');
    }
    function guardar(Request $request){
        //dd($request->all());
        $reunion = new Reunion;
        $this->validate($request,[
            'titulo'=>'required',
            'lugar'=>'required',
            'descripcion'=>'required',
            'inicio'=>'required',
            'fin'=>'required'
        ]);
        $reunion->fill($request->all());
        $reunion->save();
        $reunion->guardaImagen($request->file('foto'));
        $reunion->guardarPDF($request->file('agenda'),'agendas');
        //$reunion->guardarAcuerdos($request->file('acuerdos'));
        \Alert::success()->html("<i class='fa fa-check-circle'></i> La <b>REUNIÓN</b> ha sido correctamente creada");
        return redirect()->route('reuniones');
    }
    function editar($id){
        $reunion = Reunion::find($id);
        return view('reuniones.editar',compact('reunion'));
    }
    function actualizar($id, Request $request){
        $reunion = Reunion::find($id);

        $this->validate($request,[
            'titulo'=>'required',
            'lugar'=>'required',
            'descripcion'=>'required',
            'inicio'=>'required',
            'fin'=>'required'
        ]);
        $reunion->fill($request->all());
        $reunion->save();
        $reunion->guardaImagen($request->file('foto'));
        $reunion->guardarPDF($request->file('agenda'),'agendas');
        \Alert::success()->html("<i class='fa fa-check-circle'></i> La <b>REUNIÓN</b> ha sido correctamente actualizada");
        return redirect()->route('reuniones');
    }

/*
     *    $table->string('titulo');
            $table->mediumText('descripcion');
            $table->string('lugar');
            $table->string('galeria_instagram');
            $table->date('inicio');
            $table->date('fin');
     *
 */
}
