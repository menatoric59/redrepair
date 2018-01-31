
@extends('layouts.app')
@section('titulo') Sobre la Formación @endsection
@extends('formacion.partials.breadcrumbs')
@section('links')
    <li>
        Acerca de
        {!! Html::image(asset('assets/formacion/cabezaRompe.png'),'',['width'=>'23']) !!}
    </li>
@endsection
@section('content')
    <div class="container jumbotron">
        <p class="text-justify">
            Para revertir las relaciones de poder de género, resulta imprescindible la deconstrucción de valores y
            normas sexistas y androcéntricas; resignificarlas desde una perspectiva más humanista y equitativa.
            De modo particular, para las mujeres científicas el trabajo es un proyecto de vida que, incluso,
            puede entrar en conflicto con otros proyectos que históricamente se les han asignado en el ámbito
            doméstico y familiar. Esto implica entender la Ciencia y la Tecnología como procesos que discurren
            en la “sociedad del conocimiento”, así que es vital neutralizar las ideas y prácticas en cuanto al
            sexismo en la educación en un marco que contemple la formación de competencias para el desempeño científico
            de alto nivel e incluirlo en la formación general y continua de quienes se orientan en el camino científico,
            con la consiguiente implicación que ello traería para el desarrollo social.
        </p>

        <p class="text-justify">
            Las mujeres se han incorporado de forma masiva al espacio público desde hace tres décadas aproximadamente,
            sin embargo la segregación vertical y horizontal caracteriza esta presencia así como la falta de visibilidad
            de las mujeres en la historia del saber, el condicionamiento de estereotipos de género a través de las
            relaciones entre los/as docentes y estudiantes, la ausencia de la perspectiva de género como eje transversal
            y el androcentrismo en las ciencias constituyen expresiones del orden de poder de género en la ciencia.
        </p>
        <p class="text-justify">
            El transcurso natural del tiempo no conlleva a un cambio; el diseño de políticas y legislaciones afirmativas
            con perspectiva de género constituye un factor necesario, pero no suficiente para deconstruir el orden de
            poder de género que se produce y se reproduce en lo simbólico, en los sentidos, en las creencias, las
            tradiciones, las exigencias que constituyen las subjetividades sociales e individuales. Los mecanismos de
            eficacia del orden de poder patriarcal son hoy más sutiles e invisibles y los hombres y mujeres no siempre
            son conscientes de su posición en tanto portadores/as y agentes que reproducen dicho poder.
        </p>

        <p class="text-justify">
            Cada vez aflora con más énfasis, la necesidad y pertinencia de una transformación, ya no solo en el plano
            legal y político, sino en la subjetivación de género, en las nociones de lo que significa para las personas
            dedicarse a las ciencias y las características de quienes las ejercen. Por ello es imprescindible el desarrollo
            de estrategias intencionadas al cambio (Blazquez, 2008) asumiendo formas complejas de concebir la formación
            del ser humano en los contextos educativos. Se deben promover cambios en la subjetividad individual y
            colectiva que induzcan a una democracia genérica entre mujeres y hombres, en el establecimiento del orden
            social y en las instituciones que lo posibilitan e impulsan (Lagarde, 2013).
        </p>
    </div>
@endsection