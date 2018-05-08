<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comfonpatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo')</title>

    <!-- Styles -->
    {!! Html::style('css/app.css')!!}

    {!! Html::style('MDB-Free/css/bootstrap.min.css')!!}
    {!! Html::style('MDB-Free/css/mdb.min.css')!!}
    {!! Html::style('MDB-Free/css/style.css')!!}
    {!! Html::style('css/data-tables.min.css') !!}
    {!! Html::style('font-awesome-4.6.3/css/font-awesome.min.css') !!}
    <!-- Scripts -->
    <script src="https://unpkg.com/vue"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    {!! Html::script('js/jquery-3.1.1.min.js')!!}
    {!! Html::script('js/bootstrap.min.js')!!}
    {!! Html::script('js/background-blur.min.js') !!}

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

    {{-- GAleria Nano--}}
    <link href="https://unpkg.com/nanogallery2@2.1.0/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.1.0/dist/jquery.nanogallery2.min.js"></script>


</head>
<body style="margin-top: 90px">
    @yield('menu')
    <div class="container">
        {!! Alert::render()!!}    
    </div>
    
    @yield('content')
    {{-- Scripts --}}
    {!! Html::script('js/data-tables.min.js')!!}
    {!! Html::script('js/general.js' . '?' . date('Y-m-d h:s')  ) !!}
    {!! Html::style('css/custom.css' . '?' . date('Y-m-d h:s'))!!}

    <footer>
        {{----}}
        <div class="col-md-12 grey darken-4">
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




        <div class="col-md-12">
            <br>

            <div class="col-md-2">
                {{ Html::image('assets/index/logoRed.jpg','',['height'=>'50px','class'=>'logo-footer']) }}
            </div>
            <div class="col-md-4">
                <p><span class="white-text">Developed by menatoric59</span> <br>
                    Todos los derechos reservados {{ date('Y') }}</p>
            </div>
            <br>

        </div>


    </footer>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-101102642-1', 'auto');
      ga('send', 'pageview');



    </script>


</body>
</html>
