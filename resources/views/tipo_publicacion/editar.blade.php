
@extends('layouts.app')
@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-book"></i>
        Tipo de publicación
    </div>
    <div class="panel-body">
       {!! Form::model($tipo,['route'=>['tipo-publicacion.actualizar',$tipo->id],'method'=>'put']) !!}
            @include('tipo_publicacion.partials.campos')
            <a  href="{{ route('tipo-publicacion.lista')}}"
                class="btn grey">
                Cancelar
            </a>
            {!! Form::submit('Actualizar',['class'=>'btn cyan darken-4']) !!}
       {!! Form::close()!!}
    </div>
</div>
@endsection