<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comfonpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style('css/app.css')!!}

    {!! Html::style('MDB-Free/css/bootstrap.min.css')!!}
    {!! Html::style('MDB-Free/css/mdb.min.css')!!}
    {!! Html::style('MDB-Free/css/style.css')!!}
    {!! Html::style('css/data-tables.min.css') !!}
    {!! Html::style('font-awesome-4.6.3/css/font-awesome.min.css') !!}
    <!-- Scripts -->
    {!! Html::script('js/jquery-3.1.1.min.js')!!}
    {!! Html::script('js/bootstrap.min.js')!!}
    


    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
</head>
<body style="margin-top: 70px">
    @yield('menu')
    <div class="container">
        {!! Alert::render()!!}    
    </div>
    
    @yield('content')
    {{-- Scripts --}}
    {!! Html::script('js/data-tables.min.js')!!}
    {!! Html::script('js/general.js') !!}
    {!! Html::style('css/custom.css' . '?' . date('Y-m-d h:s'))!!}
    <footer>
        <div class="row grey darken-4">
            <br>
            <div class="row light">
                <div class="container">
                    <div class="col-md-3">
                        <h3 class="grey-text text-lighten-1">Sobre la red</h3>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('quienes-somos') }}">Quiénes somos</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('que-hacemos') }}">Qué hacemos</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('integrantes.lista') }}">Directorio</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('historia') }}">Historia</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('integrantes.mapa') }}">Cartografía e interacciones</a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="grey-text text-lighten-1">Publicaciones</h3>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('cuadernos') }}">Cuadernos de trabajo</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('revista') }}">De este lado (revista)</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('libros') }}">Libros</a>
                        </p>
                        <p>
                            <a class='grey-text text-darken-1' href="{{ route('publicaciones') }}">Catálogo de publicaciones</a>
                        </p>
                    </div>
                   
                    <div class="col-md-6 grey-text text-darken-1">
                        <h3 class="grey-text text-lighten-1">Contacto</h3>
                        <p>
                            <a class='grey-text text-darken-1' href="https://www.facebook.com/RedMexciteg/" target="_blank">
                                <i class="fa fa-facebook-square fa-2x">&nbsp;</i>    
                            </a>
                            <a class='grey-text text-darken-1' href="https://www.youtube.com/channel/UCMT24gjTYVG4DBxoCT6z_vQ" target="_blank">
                                <i class="fa fa-youtube-square fa-2x">&nbsp;</i>
                            </a>
                            <a class='grey-text text-darken-1' href="https://www.instagram.com/redmexciteg/" target="_blank">
                                <i class="fa fa-instagram fa-2x">&nbsp;</i>
                            </a>
                            <a class='grey-text text-darken-1' href="https://twitter.com/redmexciteg" target="_blank">
                                <i class="fa fa-twitter-square fa-2x">&nbsp;</i>
                            </a>
                            <a class='grey-text text-darken-1' href="https://plus.google.com/u/0/111120767007614310111" target="_blank">
                                <i class="fa fa-google-plus-square fa-2x"></i>
                            </a>
                        </p>
                        {!! config('general.direccion') !!}
                        
                        
                    </div>    
                </div>
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                {{ Html::image('assets/index/logoRed.jpg','',['height'=>'50px','class'=>'logo-footer']) }}
            </div>
            <div class="col-md-4">
                <p><span class="white-text">Powered by menatoric59</span> <br>
                Todos los derechos reservados {{ date('Y') }}</p>
            </div>
        </div>
        <br>




    </footer>

    <style>
        .logo-footer{
            border-right-style : solid;
            border-right-color :grey;
            border-right-width : medium;
        }
        .carousel-caption{
            width: 100%;
            right: 0%;
            left: 0%;
            
        }
        .fa-twitter-square:hover{
            color: #00bcd4;
        }
        .fa-facebook-square:hover{
            color:#1565c0;
        }
        .fa-youtube-square:hover{
            color: white;
        }
        .fa-instagram:hover{
            color: #ec407a;
        }
        .fa-google-plus-square:hover{
            color:#ef5350;
        }
        .light{
            font-weight:300;
        }
    </style>
</body>
</html>
