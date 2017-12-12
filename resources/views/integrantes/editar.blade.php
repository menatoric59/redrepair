
@extends('layouts.app')
@section('content')
    @extends('integrantes.partials.breadcrumbs')
    @section('links')
        <li>
            <i class="fa fa-pencil"></i>
            Editar
        </li>
    @endsection
    <div class="container">
        {!! Html::image($integrante->imagen_perfil . '?'.time() ,'Imagen del perfil',
                [
                'height'=>'100px'
                ])
        !!}
        {!! Form::model($integrante,['route'=>['integrante.actualizar',$integrante->id],'method'=>'put','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
        @include('integrantes.partials.campos')
        <a  href="{{ route('integrantes.lista')}}"
            class="btn grey">
            Cancelar
        </a>
        {!! Form::submit('Actualizar',['class'=>'btn cyan darken-4']) !!}
        {!! Form::close()!!}
    </div>

    {!! Html::script('ckeditor/ckeditor.js')  !!}
@endsection