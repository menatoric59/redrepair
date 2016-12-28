
@extends('layouts.limpio')
@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-book"></i>
        Nuevo Tipo de Publicación
    </div>
    <div class="panel-body">
       {!! Form::open(['route'=>['tipo-publicacion.guardar'],'method'=>'post']) !!}
            @include('tipo_publicacion.partials.campos')
            <a  href="{{ route('tipo-publicacion.lista')}}"
                class="btn grey">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn cyan darken-4']) !!}
       {!! Form::close()!!}
    </div>
</div>
@endsection