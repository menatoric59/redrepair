
@extends('layouts.app')
@section('titulo') Talleres @endsection
@extends('formacion.partials.breadcrumbs')
@section('links')
    <li>
        Talleres
        {!! Html::image(asset('assets/formacion/cabezaRompe.png'),'',['width'=>'23']) !!}
    </li>
@endsection
@section('content')
    <div class="container jumbotron">
        <br><br>
        <div class="row">
            <div class="col-md-6">
                {!! Html::image('assets/formacion/2.png','Seminario',['height'=>'200','class'=>'center-block']) !!}
            </div>
            <div class="col-md-6">
                <iframe height="200" src="https://www.youtube.com/embed/IpZ8Z_arFcA" frameborder="0" gesture="media" allow="encrypted-media" class="center-block"></iframe>
            </div>
        </div>
        <br><br>
        <div class="row">
            <p class="text-justify">
                En 2016, con el apoyo de CONACyT, BUAP, la Universidad de Guadalajara y la Red Temática Mexicana de Ciencia, Tecnología y Género, realizaremos el III Taller.
            </p>
            <p class="text-justify">
                Buscando contribuir a una mayor participación de las mujeres en la ciencia, tecnología e innovación, el Grupo de Trabajo Mujeres en la Física de IUPAP, con el apoyo de CONACyT, Mesoamerican Centre for Theoretical Physics, Benemérita Universidad Autónoma de Puebla y otras instituciones, organizó el Taller de habilidades profesionales para jóvenes científicas, orientado a jóvenes latinoamericanas que se encuentran en posgrado o la etapa inicial de su vida científica. En la primera versión se enfocó a disciplinas donde la presencia femenina es muy reducida como son Matemáticas, Ingenierías y Tecnología. Del 30 de julio al 2 de agosto de 2014, las participantes escucharon de investigadoras consolidadas o expertos en el área el cómo desarrollar algunas de sus actividades del quehacer científico, reflexionaron sobre el ambiente de trabajo en el que se desenvuelven, conocieron organismos y programas que favorecen la colaboración en la región y presentaron sus trabajos de investigación. En total asistieron 30 mexicanas, 3 colombianas y una por cada país siguiente: Cuba, Guatemala, Honduras, El Salvador.
            </p>

            <p class="text-justify">
                <a href="http://www.ifuap.buap.mx/eventos/III_THPJC16/" target="_blank">
                    <i class="fa fa-link fa-fw"></i>
                    Información
                </a>
            </p>
            <p class="text-justify">
                <a href="https://www.youtube.com/watch?v=IpZ8Z_arFcA" target="_blank">
                    <i class="fa fa-youtube fa-fw"></i>
                    Video
                </a>
            </p>
        </div>
    </div>

@endsection