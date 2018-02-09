
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
                </h1>
                <p class="text-center">
                    <small class="text-muted text-center" style="font-style: italic">{!! $entrada->fecha_entrada !!}</small>
                </p>
                @if(auth()->check())
                    <p class="text-center">
                        <a href="{{ route('entradas.editar',[$tipo,$subtipo,$entrada->id]) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o"></i>
                            Editar
                        </a>
                    </p>
                @endif
                <br>
                <div class="col-md-6">
                    {!! Html::image($entrada->imagen,'Vista previa material',['class'=>'center-block img-responsive img-thumbnail']) !!}
                </div>

                <div class="col-md-6">
                    {!! $entrada->descripcion_html !!}
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