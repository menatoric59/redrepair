
@extends('layouts.limpio')
@section('content')
<div class="panel">
    <div class="panel-heading cyan darken-4 white-text">
        <i class="fa fa-book"></i>
        Publicacion
    </div>
    <div class="panel-body">
       {!! Form::open(['route'=>['publicacion.guardar'],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
            @include('publicaciones.partials.campos')
            <a  href="{{ route('publicacion.lista')}}"
                class="btn grey">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn cyan darken-4']) !!}
       {!! Form::close()!!}
    </div>
</div>
{!! Html::script('ckeditor/ckeditor.js')  !!}




@endsection