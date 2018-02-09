
@extends('layouts.app')
@section('titulo') {!! $titulo !!} @endsection
@section('content')
    @extends('entradas.partials.breadcrumbs')
<div class="container">
    @if(auth()->check())
        <a href="{{ route('entradas.nueva',[$tipo,$subtipo]) }}" class="btn {!! $padre->clase_color !!}">
            <i class="fa fa-plus-circle"></i>
            Agregar
        </a>
    @endif
    <div class="row">
        @foreach($entradas as $entrada)
            <div class="col-md-{!! $entrada->columnas !!}">
                <br><br><br>
                <h1 class="thin text-center">
                    {!! $entrada->nombre !!}
                    @if(auth()->check())
                    <a href="{{ route('entradas.editar',[$tipo,$subtipo,$entrada->id]) }}" class="btn btn-primary">
                        <i class="fa fa-pencil-square-o"></i>
                        Editar
                    </a>
                    @endif
                </h1>
                <br>
                <div class="col-md-6">
                    <a href="{!! $entrada->imagen !!}" target="_blank" class="red-text" data-toggle="modal">
                        {!! Html::image($entrada->imagen,'Vista previa material',['class'=>'center-block img-responsive','id'=>'img_preview']) !!}
                    </a>
                </div>

                <div class="col-md-6">
                    <p id="descripcion_prev">
                        {!! $entrada->descripcion_html !!}
                    </p>
                    @if($entrada->liga_ver_mas)
                    <p>
                        <a href="{!! $entrada->liga_ver_mas !!}" class="btn btn-info" target="_blank">
                            {!! $entrada->texto_ver_mas !!}
                        </a>
                    </p>
                    @endif
                </div>

            </div>
        @endforeach
    </div>

</div>

@endsection