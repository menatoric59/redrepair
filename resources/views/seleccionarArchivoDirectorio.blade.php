@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Selecciona archivo de directorio</div>
            <div class="panel-body">
            {!! Form::open(['route'=>'directorio.almacenar','method'=>'post','enctype'=>'multipart/form-data'])!!}
                
                {!! Field::file('directorio',[]) !!}
                {!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
            {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
