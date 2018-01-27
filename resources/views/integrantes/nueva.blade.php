
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
            Nueva Integrante
            <i class="fa fa-plus-circle"></i>
        </li>
    @endsection
    <div class="container">
        {!! Form::open(['route'=>['integrante.guardar'],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
        @include('integrantes.partials.campos')
        <a  href="{{ route('integrantes.lista')}}"
            class="btn grey">
            Cancelar
        </a>
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
        {!! Form::close()!!}
    </div>

{!! Html::script('ckeditor/ckeditor.js')  !!}

@endsection