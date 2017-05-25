@extends('layouts.app')

@section('content')
    <div class="jumbotron container">
        <h1 class="text-center thin">Contacto</h1>
        <br><br>
        <div class="row">
            <div class="col-md-6 black-text">
                {!! Form::open() !!}

                {!! Field::text('nombre',null,['ph'=>'Nombre completo','required']) !!}
                {!! Field::email('email',null,['ph'=>'correo@dominio.com','required']) !!}
                {!! Field::text('asunto',null,['ph'=>'Asunto a tratar','required']) !!}
                {!! Field::textarea('mensaje',null,['ph'=>'Mensaje...','required','rows'=>'4']) !!}


                <p class="pull-left"><button class="btn btn-info" type="submit">Enviar</button></p>

                {!! Form::close() !!}
            </div>

            <div class="col-md-6 black-text">
                <p><strong>Sede: </strong>5 piso Torre II de Humanidades.</p>
                <p><strong>Dirección: </strong>Ciudad Universitaria S/N, Delegación Coyoacán Col. Universidad Nacional Autónoma de México, Cd. Universitaria, 04510 Ciudad de México, México</p>
                <p><strong>Tel: </strong>(52) 55-56230222</p>
                <p><strong>Ext:</strong> 42769</p>
                <p><strong>Correo:</strong> redmexciteg@gmail.com</p>
            </div>
        </div>
        <br><br><br>

        <div class="row map-container">
            <h1 class="text-center thin">Ubicación</h1>
            <br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.8261175016482!2d-99.18525348509488!3d19.33335018694073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdfff8f8767d79%3A0xb28b343bad44afd4!2sTorre+II+de+Humanidades!5e0!3m2!1ses-419!2smx!4v1495664081967" width="100%" height="450" frameborder="0" style="border:0" scrolling="no"></iframe>
        </div>

    </div>
    <style>
        .map-container {
        width: 100%;
        margin: 50px 0 0px;
        }
        .map-container iframe{
        width: 100%;
        display: block;
        pointer-events: none;
        position: relative; /* IE needs a position other than static */
        }
        .map-container iframe.clicked{
        pointer-events: auto;
        }
    </style>
    <script>
        $('.map-container')
            .click(function(){
                $(this).find('iframe').addClass('clicked')})
            .mouseleave(function(){
                $(this).find('iframe').removeClass('clicked')});
    </script>

@endsection()