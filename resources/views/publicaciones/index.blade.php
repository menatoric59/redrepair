@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-book"></i>
        Publicaciones
        @if(auth()->check())
        <a  href="{{ route('publicacion.nueva') }}" 
            class="btn btn-sm pull-right">+ Nueva
        </a>
        @endif 
    </div>
    <div class="panel-body">
       
        <table class="data-table">
            <thead>
                <th>Titulo</th>
                {{--
                <th>Adscripción</th>
                <th>Disciplina</th>
                --}}
                @if(auth()->check())
                <th></th>
                @endif
            </thead>
            <tbody>
                @foreach($publicaciones as $publicacion)
                <tr>
                    <td>
                        <a href="">
                            {{ $integrante['titulo']}}
                        </a>
                    </td>
                    {{--
                    <td>{{ $integrante['dependencia'] . '-' . $integrante['institucion'] }}</td>
                    <td>{{ $integrante['disciplina']}}</td>
                    --}}
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
@endsection()