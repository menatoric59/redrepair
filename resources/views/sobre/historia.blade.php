@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <h1 class="text-center thin">Historia</h1>
        {!! Html::image('assets/sobre-la-red/quienes-somos/collage.jpg','Collage',['class'=>'center-block img-responsive']) !!}

        <div class="col-md-12 black-text">
            <br><br>
            <p>La RED MEXCITEG se propuso en 2012 durante el Foro Nacional de Análisis y Propuestas con perspectiva de Género sobre los Sistemas de Estímulo, para intercambiar experiencias previas de distintos grupos de investigación que han trabajado y planteado iniciativas desde hace 30 años.  Su constitución formal se realizó en 2014 (Red Temática CONACYT No. 2244521).</p>
            <br>


            <p>RED MEXCITEG funciona mediante reuniones de trabajo periódicas de grupos de investigación o nodos en diferentes Estados del país. También se realizan reuniones plenarias cada año.</p>
            <br>


            <p>La dinámica de trabajo ha estimulado el intercambio de información y la colaboración entre sus integrantes y se ha desarrollado un marco teórico común para el estudio y la investigación de las relaciones entre ciencia, tecnología y género.</p>
        </div>

    </div>

@endsection()