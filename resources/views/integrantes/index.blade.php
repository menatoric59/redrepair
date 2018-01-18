
@extends('layouts.app')
@section('titulo')
    Directorio de Integrantes
@endsection
@section('content')
    @include('integrantes.partials.breadcrumbs')
    <div class="container">
        @if(auth()->check())
            <a href="{{ route('integrante.nueva') }}" class="btn pink lighten-2">
                <i class="fa fa-plus-circle"></i>
                Nueva
            </a>
        @endif
            <h1 class="text-center thin">Directorio</h1>
            <table class="data-table">
                <thead>
                    <th>Nombre</th>
                    <th>Adscripción</th>
                    <th>Disciplina</th>
                    <th>Campo</th>
                </thead>
                <tbody>
                @foreach($integrantes as $integrante)
                    <tr>
                        <td>
                            @if(auth()->check())
                                <a href="{{ route('integrante.editar',$integrante->id)}}"
                                   class="btn btn-sm btn-{!! $integrante['estatus']=='activo' ? 'primary' : 'danger' !!}">
                                    <i class="fa fa-pencil"> </i>
                                </a>
                            @endif
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
                        <td>
                            <a href="{{ route('integrante.perfil',$integrante->id )}}" class="grey-text">
                                {{ $integrante['campo']}}
                            </a>
                        </td>
                    </tr>

                @endforeach()
                </tbody>
            </table>
    </div>
@endsection