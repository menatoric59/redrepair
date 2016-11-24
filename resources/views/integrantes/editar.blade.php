
@extends('layouts.app')
@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-female"></i>
        Integrantes
    </div>
    <div class="panel-body">
       {!! Form::model($integrante,['route'=>['integrante.actualizar',$integrante->id],'method'=>'put']) !!}
            @include('integrantes.partials.campos')
            <a  href="{{ route('integrantes.lista')}}"
                class="btn grey">
                Cancelar
            </a>
            {!! Form::submit('Actualizar',['class'=>'btn cyan darken-4']) !!}
       {!! Form::close()!!}
    </div>
</div>
{!! Html::script('ckeditor/ckeditor.js')  !!}




@endsection