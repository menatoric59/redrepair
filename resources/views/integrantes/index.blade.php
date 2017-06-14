
@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <h1 class="text-center thin">Directorio</h1>
        <div class="panel">
            <div class="panel-heading pink lighten-2 white-text">
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
                            <td>
                                <a href="{{ route('integrante.perfil',$integrante->id )}}">
                                    {{ $integrante['nombre']}}
                                </a>
                            </td>
                            <td>{{ $integrante['dependencia'] . '-' . $integrante['institucion'] }}</td>
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
    </div>
@endsection