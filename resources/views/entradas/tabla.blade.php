
@extends('layouts.app')
@section('titulo') {!! $titulo !!} @endsection
@section('content')
    @include('entradas.partials.breadcrumbs')
    <div class="container">
        @if(auth()->check())
            <a href="{{ route('avisos.nuevo') }}" class="btn {!! $padre->clase_color !!}">
                <i class="fa fa-plus-circle"></i>
                Agregar
            </a>
        @endif
        <table class="table">
            <thead>
                <th>id</th>
                <th>Aviso</th>
                <th>Editar</th>
            </thead>
            <tbody>
                @foreach($entradas as $entrada)
                <tr>
                    <td>
                        {!! $entrada->id !!}
                    </td>
                    <td>
                       {!! $entrada->nombre !!}
                    </td>
                    <td>
                        <a href="{{ route('entradas.editar',[$tipo,$subtipo,$entrada->id]) }}" class="btn btn-info">Editar</a>
                    </td>
                </tr>

                @endforeach()
            </tbody>
        </table>
    </div>
@endsection