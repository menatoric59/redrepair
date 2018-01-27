
@extends('layouts.app')
@section('content')
    @extends('sobre.partials.breadcrumbs')
    @section('links')
        <li>
            <a href="{{ route('integrantes.lista') }}" class="white-text">
                Directorio
                {!! Html::image('assets/sobre-la-red/mujerBlancoLista.png?dda','Imagen',['width'=>'32','margin'=>'auto']) !!}
            </a>
        </li>
        <li>
            Editar
            <i class="fa fa-pencil"></i>
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
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        {!! Form::close()!!}
    </div>

    {!! Html::script('ckeditor/ckeditor.js')  !!}
@endsection