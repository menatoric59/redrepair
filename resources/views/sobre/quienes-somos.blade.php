@extends('layouts.app')

@section('content')
    <div class="container jumbotron">
        <h1 class="text-center thin">Quiénes somos</h1>
        {!! Html::image('assets/sobre-la-red/quienes-somos/collage.jpg','Collage',['class'=>'center-block img-responsive']) !!}
        @foreach(config('pagina.quienes-somos') as $item)
            <div class="row">
                <br><br><br>
                <div class="col-md-2 col-sm-12">
                    {!! Html::image( $item['imagen'],'logo',['width'=>'150']) !!}
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 class="thin">{!! $item['titulo'] !!}</h2>
                    <br>

                    <p class="black-text">{!! $item['parrafo'] !!}</p>
                    @foreach($item['lista'] as $punto)
                        <p class="black-text">
                            @if ($punto=='Lourdes Elena Fernández Rius, IUIT')
                                {!! Html::image('assets/index/cruz.png','Cruz',['width'=>'15']) !!}
                            @else
                                <i class="fa fa-adjust"></i>
                            @endif()

                            {!! $punto !!}
                        </p>
                    @endforeach()
                </div>
            </div>
        @endforeach
        <br>
        <div class="col-md-2 col-sm-4">

        </div>
        <div class="col-md-10 col-sm-8 black-text thin">

            <strong>Hacen parte de la Red Mexicana de Ciencia, Tecnología y Género:</strong><br><br>
            1. Académicas provenientes de más de 15 universidades de diferentes Estados de la República Mexicana. <br>
            2. Nodos: UNAM CU y Multidisciplinarias; Puebla; Pacífico; Sureste; Norte; Estudiantes de Posgrado y Posdoctorales; Invitadas Extranjeras.
                <br>
            3. Grupo de Investigación en México de la Red Iberoamericana de Ciencia, Tecnología y Género (Red CYTED) con 9 integrantes de España, Argentina, Brasil, Colombia, Cuba, Guatemala, México, Uruguay y Venezuela
                <br>
        </div>

    </div>

@endsection()