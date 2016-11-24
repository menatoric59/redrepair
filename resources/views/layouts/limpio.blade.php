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
    {!! Html::style('css/custom.css')!!}
    {!! Html::style('MDB-Free/css/bootstrap.min.css')!!}
    {!! Html::style('MDB-Free/css/mdb.min.css')!!}
    {!! Html::style('MDB-Free/css/style.css')!!}
    {!! Html::style('css/data-tables.min.css') !!}
    {!! Html::style('font-awesome-4.6.3/css/font-awesome.min.css') !!}
    <!-- Scripts -->
    {!! Html::script('js/jquery-3.1.1.min.js')!!}
    {!! Html::script('js/bootstrap.min.js')!!}
</head>
<body>
    @yield('menu')
    <div class="container">
        {!! Alert::render()!!}    
    </div>
    
    @yield('content')
    {{-- Scripts --}}
    {!! Html::script('js/data-tables.min.js')!!}
    {!! Html::script('js/general.js') !!}
    
</body>
</html>
