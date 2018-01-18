
@extends('layouts.app')
@extends('publicaciones.partials.breadcrumbs')
@section('titulo')
    Cuadernos de Trabajo
@endsection
@section('links')
    <li><i class="fa fa-pencil-square"></i> Cuadernos de trabajo</li>
@endsection
@section('content')
    <div class="container jumbotron">
        <p class="black-text"><strong>Los 6 Cuadernos de Trabajo de la Red Mexicana de Ciencia, Tecnología y Género (Red MEXCITEG) </strong>reúnen los resultados de las actividades académicas, de investigación y formación de los grupos que la integran mediante diversos ejes de trabajo en los que se plantea el estado del arte sobre las relaciones entre ciencia y género de los últimos años, considerando también el camino recorrido desde la década de los 80´s para conocer la evolución del proceso hasta el momento, con la conceptualización teórica en la que se fundamentan y se enmarca dentro de un panorama mundial, en el que se abordan estudios realizados en países de la Unión Europea, Estados Unidos de Norteamérica, Latinoamérica y el caso particular de México.
        </p>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_af30241702a84ec2978a3bbf3f605408.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno1.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
            {{--
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_ffa31b9ac8124019ba11c4eb054c0e28.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno2.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
            --}}
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_cad40c7f7d514f63813e9defd2d32533.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno3.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="row">
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_aa997e8105524f269a7378dfc5cd9690.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno4.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_dfd9f4d1505b4966bad34d1a34fc3c11.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno5.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://docs.wixstatic.com/ugd/b39ed3_fb069af6bdd247abb167af93dbf72e9a.pdf" target="_blank">
                    {!! Html::image('assets/biblioteca/cuadernos/cuaderno6.jpg','',['class'=>'img-responsive'] ) !!}
                </a>
            </div>
        </div>


    </div>



@endsection