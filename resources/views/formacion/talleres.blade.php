
@extends('layouts.app')
@section('content')
    <div class="container jumbotron">
        <br>
        <h1 class="text-center thin">Talleres</h1>
        <br>

        <p class="text-justify">
            Para revertir las relaciones de poder de género, resulta imprescindible la deconstrucción de valores y
            normas sexistas y androcéntricas; resignificarlas desde una perspectiva más humanista y equitativa.
        </p>
        <p class="text-center">
            <a href="#modalSobreFormacion" data-toggle="modal" class="btn btn-primary">
                Más sobre la Formación de la Red
            </a>
        </p>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Taller</h2>
                {!! Html::image('assets/formacion/1.png','Seminario',['class'=>'img-responsive']) !!}
                <p class="text-justify">
                    La Red Mexciteg, la Benemérita Universidad Autónoma de Puebla, la Universidad Iberoamericana Puebla y el Consejo Nacional de Ciencia y Tecnología, convocaron a la comunidad académica a participar en el proceso para asistir al Seminario de Formación de Habilidades Profesionales con Perspectiva de Género (4ta edición, antes Taller de Habilidades profesionales para jóvenes científicas) que se realizará del 6 al 9 de septiembre de 2017, Edificio Carolino, BUAP, Puebla.
                    Este año también realizamos:
                </p>

                <p class="text-justify">
                    <a href="http://www.ifuap.buap.mx/eventos/SFHPPG17/" target="_blank">
                        <i class="fa fa-link fa-fw"></i>
                        Taller de Habilidades Profesionales para Jóvenes en Ciencia e Ingeniería20-22 de noviembre 2017Universidad de Los Andes, Bogotá, Colombia
                    </a>
                </p>
                <p class="text-justify">
                    <a href="https://www.youtube.com/watch?v=yuOqS_RpVFQ" target="_blank">
                        <i class="fa fa-youtube fa-fw"></i>
                        Taller de Habilidades Profesionales para Jóvenes en Ciencia e Ingeniería
                    </a>
                </p>

            </div>
            <div class="col-md-6">
                <h2 class="text-center">Taller</h2>
                {!! Html::image('assets/formacion/2.png','Seminario',['class'=>'img-responsive']) !!}
                <p class="text-justify">
                    En 2016, con el apoyo de CONACyT, BUAP, la Universidad de Guadalajara y la Red Temática Mexicana de Ciencia, Tecnología y Género, realizaremos el III Taller.
                </p>
                <p class="text-justify">
                    Buscando contribuir a una mayor participación de las mujeres en la ciencia, tecnología e innovación, el Grupo de Trabajo Mujeres en la Física de IUPAP, con el apoyo de CONACyT, Mesoamerican Centre for Theoretical Physics, Benemérita Universidad Autónoma de Puebla y otras instituciones, organizó el Taller de habilidades profesionales para jóvenes científicas, orientado a jóvenes latinoamericanas que se encuentran en posgrado o la etapa inicial de su vida científica. En la primera versión se enfocó a disciplinas donde la presencia femenina es muy reducida como son Matemáticas, Ingenierías y Tecnología. Del 30 de julio al 2 de agosto de 2014, las participantes escucharon de investigadoras consolidadas o expertos en el área el cómo desarrollar algunas de sus actividades del quehacer científico, reflexionaron sobre el ambiente de trabajo en el que se desenvuelven, conocieron organismos y programas que favorecen la colaboración en la región y presentaron sus trabajos de investigación. En total asistieron 30 mexicanas, 3 colombianas y una por cada país siguiente: Cuba, Guatemala, Honduras, El Salvador.
                </p>

                <p class="text-justify">
                    <a href="http://www.ifuap.buap.mx/eventos/III_THPJC16/" target="_blank">
                        <i class="fa fa-link fa-fw"></i>
                        Liga
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
    </div>

    @include('formacion.partials.modal_sobre_formacion')
@endsection