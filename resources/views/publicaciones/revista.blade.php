
@extends('layouts.app')
@section('content')
    <div class="container jumbotron">
        <br>
        <h1 class="text-center thin">Revista <i>De este lado</i></h1>
        <br>
        <div class="col-md-6">
            <h1 class="text-center"><i class="fa fa-exclamation-triangle"></i> La revista aún está en construcción, pronto la publicaremos</h1>
        </div>
        <div class="col-md-6">
        	{!! Html::image('assets/biblioteca/publicaciones/4.jpg','portada',['class'=>'img-responsive center-block']) !!}	
        </div>
        
        
        
    </div>



@endsection