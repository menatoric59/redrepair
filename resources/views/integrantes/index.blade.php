
@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-female"></i>
        Integrantes
        @if(auth()->check())
        <a  href="{{ route('integrante.nueva') }}" 
            class="btn btn-sm pull-right">+ Nueva
        </a>
        @endif 
    </div>
    <div class="panel-body">
       
        <table class="data-table">
            <thead>
                <th class="hidden">Orden</th>
                <th>Nombre</th>
                <th>Adscripción</th>
                <th>Disciplina</th>
                @if(auth()->check())
                <th></th>
                @endif
            </thead>
            <tbody>
                @foreach($integrantes as $integrante)
                <tr>
                    <td class="hidden">{{ $integrante['orden']}}</td>
                    <td>
                        <a href="{{ route('integrante.perfil',$integrante->id )}}">
                            {{ $integrante['nombre']}}
                        </a>
                    </td>
                    <td>{{ $integrante['dependencia']}}</td>
                    <td>{{ $integrante['disciplina']}}</td>
                    @if(auth()->check())
                    <td>
                        <a href="{{ route('integrante.editar',$integrante->id)}}"
                            class="btn btn-sm cyan darken-4">
                            <i class="fa fa-pencil"> </i>
                        </a>
                    </td>
                    @endif
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection