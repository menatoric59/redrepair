@extends('layouts.limpio')
@section('content')
<div class="container">
    <div class="panel">
        <div class="panel-heading cyan darken-4 white-text">
            <i class="fa fa-female"></i>
            Integrantes
        </div>
        <div class="panel-body">
           
            <table class="data-table">
                <thead>
                    <th>No.</th>
                    <th>Nombre</th>
                </thead>
                <tbody>
                    @foreach($filas as $fila)
                    <tr>
                        <td>{{ $fila['no']}}</td>
                        <td>{{ $fila['nombre']}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection