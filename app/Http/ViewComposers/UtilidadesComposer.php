<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User as User;

class UtilidadesComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $estados = \DB::table('estados')
        ->orderBy('Nombre')
        ->pluck('nombre','clave')
        ->toArray();

        $disciplinas = \DB::table('integrantes')
        ->orderBy('disciplina')
        ->pluck('disciplina')
        ->toArray();
        
        $view->with('lista_estados', $estados);
        $view->with('texto_disciplina',$disciplinas);
    }

}