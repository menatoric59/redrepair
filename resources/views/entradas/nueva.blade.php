
@extends('layouts.app')
@section('content')
    @extends('entradas.partials.breadcrumbs')
    @section('links')
        <li>

            Nueva
            <i class="fa fa-plus-circle"></i>
        </li>
    @endsection
    <div class="container" id="app_vue">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    {!! Html::image('','Imagen del aviso',['class'=>'img-responsive','id'=>'img_preview','width'=>'267']) !!}
                    {!! Form::open(['route'=>['entradas.guardar',$tipo,$subtipo],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                    @include('entradas.partials.campos')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection