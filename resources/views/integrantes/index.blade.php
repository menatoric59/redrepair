@extends('layouts.limpio')
@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-female"></i>
        Integrantes
    </div>
    <div class="panel-body">
       
        <table class="data-table">
            <thead>
                <th class="hidden">Orden</th>
                <th>Nombre</th>
                <th>Adscripción</th>
                <th>Disciplina</th>
            </thead>
            <tbody>
                @foreach($integrantes as $integrante)
                <tr>
                    <td class="hidden">{{ $integrante['orden']}}</td>
                    <td>{{ $integrante['nombre']}}</td>
                    <td>{{ $integrante['adscripcion']}}</td>
                    <td>{{ $integrante['disciplina']}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection