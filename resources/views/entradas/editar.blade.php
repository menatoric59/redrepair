
@extends('layouts.app')
@section('content')
    @extends('entradas.partials.breadcrumbs')
    @section('links')
        <li>

            Editar
            <i class="fa fa-pencil"></i>
        </li>
    @endsection
    <div class="container" id="app_vue">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    {!! Html::image($entrada->imagen,'Imagen del aviso',['class'=>'img-responsive','id'=>'img_preview','width'=>'267']) !!}
                    {!! Form::model($entrada,['route'=>['entradas.actualizar',$tipo,$subtipo,$entrada->id],'method'=>'put','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                    @include('entradas.partials.campos')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection