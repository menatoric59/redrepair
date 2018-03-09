@extends('layouts.app')
@section('titulo')
    Red Mexciteg - Red Mexicana de Ciencia, Tecnología y Género
@endsection
@section('content')
    @include('index.carrusel')
    <br><br>
    <div class="">
        <div data-nanogallery2='{
        "thumbnailWidth": "75",
        "thumbnailHeight": "auto",
        "thumbnailAlignment": "center",
        "gallerySorting":"random"
      }'>
            @foreach(\App\Integrante::fotosIntegrantes() as $foto)
            <!-- ### gallery content ### -->
                <a href="{!! $foto['nombre'] . '?' . date('Y-m-d h:i:s') !!}"
                   data-ngthumb="{!! $foto['nombre'] . '?' . date('Y-m-d h:i:s') !!}"
                   data-ngdesc="">
                </a>
            @endforeach

        </div>
    </div>
    <div class="jumbotron">



    	@include('index.avisos')
    	<br>
    	<br>
    	<br>
        @include('index.ultimas-entradas')
        <br><br><br>
        @include('index.publicaciones')
    </div>
{{----}}
    <script>
        $(function(){
            $('#tabla_reuniones').DataTable( {
                "language": {
                    "url": "/js/dataTables.spanish.lang",
                },
                "bFilter": false, // Hide the search input
                "bInfo" : false, // Hide the record count
                "paging" : false,
                "order": [[ 0, "desc" ]],
                "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    }
                ]
            } );
        });
    </script>

@endsection()