
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
                        @if(auth()->check())
                            <th></th>
                        @endif
                        <th>Nombre</th>
                        <th>Adscripción</th>
                        <th>Disciplina</th>

                    </thead>
                    <tbody>
                        @foreach($integrantes as $integrante)
                        <tr>
                            <td>
                                @if(auth()->check())
                                    <a href="{{ route('integrante.editar',$integrante->id)}}"
                                       class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil"> </i>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('integrante.perfil',$integrante->id )}}" class="grey-text">
                                    {{ $integrante['nombre']}}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('integrante.perfil',$integrante->id )}}" class="grey-text">
                                    {{ $integrante['dependencia'] . '-' . $integrante['institucion'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('integrante.perfil',$integrante->id )}}" class="grey-text">
                                    {{ $integrante['disciplina']}}
                                </a>
                            </td>

                        </tr>

                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection