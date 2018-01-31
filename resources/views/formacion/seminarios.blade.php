
@extends('layouts.app')
@section('titulo') Seminarios @endsection
@extends('formacion.partials.breadcrumbs')
@section('links')
    <li>
        Seminarios
        {!! Html::image(asset('assets/formacion/cabezaRompe.png'),'',['width'=>'23']) !!}
    </li>
@endsection
@section('content')
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-6">
                <br>
                {!! Html::image('assets/formacion/1.jpg','Seminario',['class'=>'center-block','height'=>'200']) !!}
            </div>
            <div class="col-md-6">
                <br>
                <iframe height="200" src="https://www.youtube.com/embed/yuOqS_RpVFQ" frameborder="0" gesture="media" allow="encrypted-media" class="center-block"></iframe>
            </div>

        </div>
        <br><br>
        <div class="row">
            <p class="text-justify">
                La Red Mexciteg, la Benemérita Universidad Autónoma de Puebla, la Universidad Iberoamericana Puebla y
                el Consejo Nacional de Ciencia y Tecnología, convocaron a la comunidad académica a participar en el
                proceso para asistir al <b>Seminario de Formación de Habilidades Profesionales con Perspectiva de Género
                </b> (4ta edición, antes Taller de Habilidades profesionales para jóvenes científicas) que se realizará
                del 6 al 9 de septiembre de 2017, Edificio Carolino, BUAP, Puebla.
                Este año también realizamos:
            </p>
            <p class="text-justify">
                <a href="http://www.ifuap.buap.mx/eventos/SFHPPG17/" target="_blank">
                    <i class="fa fa-link fa-fw"></i>
                    Información
                </a>
            </p>
        </div>
    </div>


@endsection