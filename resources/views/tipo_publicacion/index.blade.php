
@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-book"></i>
        Tipos de publicación
        <a  href="{{ route('tipo-publicacion.nueva') }}"
            class="btn btn-sm pull-right">+ Nueva
        </a>
    </div>
    <div class="panel-body">
        <table class="data-table">
            <thead>
                <th>Clave</th>
                <th>Nombre</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($tipos as $tipo)
                <tr>
                    <td>{{ $tipo['id']}}</td>
                    <td>{{ $tipo['nombre']}}</td>
                    <td>
                        <a href="{{ route('tipo-publicacion.editar',$tipo->id)}}"
                            class="btn btn-sm cyan darken-4">
                            <i class="fa fa-pencil"> </i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection