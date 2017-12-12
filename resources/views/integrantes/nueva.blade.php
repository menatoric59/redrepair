
@extends('layouts.app')
@section('content')
    @extends('integrantes.partials.breadcrumbs')

    @section('links')
        <li>
            <i class="fa fa-plus-circle"></i>
            Nueva
        </li>
    @endsection
    <div class="container">
        {!! Form::open(['route'=>['integrante.guardar'],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
        @include('integrantes.partials.campos')
        <a  href="{{ route('integrantes.lista')}}"
            class="btn grey">
            Cancelar
        </a>
        {!! Form::submit('Guardar',['class'=>'btn cyan darken-4']) !!}
        {!! Form::close()!!}
    </div>

{!! Html::script('ckeditor/ckeditor.js')  !!}

@endsection