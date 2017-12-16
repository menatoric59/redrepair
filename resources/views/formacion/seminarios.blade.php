
@extends('layouts.app')
@section('content')
    <div class="container jumbotron">
        <br>
        <h1 class="text-center thin">Formación Red Mexciteg</h1>
        <br>

        <p class="text-justify">
            Para revertir las relaciones de poder de género, resulta imprescindible la deconstrucción de valores y normas sexistas y androcéntricas; resignificarlas desde una perspectiva más humanista y equitativa.
        </p>
        <p class="text-center">
            <a href="#modalSobreFormacion" data-toggle="modal" class="btn btn-primary">
                Más sobre la Formación de la Red
            </a>
        </p>
        <br><br>
        <h2 class="text-center">Seminario</h2>
        {!! Html::image('assets/formacion/1.jpg','Seminario',['class'=>'center-block','width'=>'400']) !!}
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <p class="text-justify">
                    La Red Mexciteg, la Benemérita Universidad Autónoma de Puebla, la Universidad Iberoamericana Puebla y el Consejo Nacional de Ciencia y Tecnología, convocaron a la comunidad académica a participar en el proceso para asistir al <b>Seminario de Formación de Habilidades Profesionales con Perspectiva de Género</b> (4ta edición, antes Taller de Habilidades profesionales para jóvenes científicas) que se realizará del 6 al 9 de septiembre de 2017, Edificio Carolino, BUAP, Puebla.
                    Este año también realizamos:
                </p>
                <p class="text-justify">
                    <a href="http://www.ifuap.buap.mx/eventos/SFHPPG17/" target="_blank">
                        <i class="fa fa-link fa-fw"></i>
                        Información
                    </a>
                </p>
                <p class="text-justify">
                    <a href="https://www.youtube.com/watch?v=yuOqS_RpVFQ" target="_blank">
                        <i class="fa fa-youtube fa-fw"></i>
                        Video
                    </a>
                </p>
            </div>
            <div class="col-md-6 valign">
                <iframe width="80%" height="250" src="https://www.youtube.com/embed/yuOqS_RpVFQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>

        </div>
    </div>
    @include('formacion.partials.modal_sobre_formacion')

@endsection