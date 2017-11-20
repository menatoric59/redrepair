@extends('layouts.app')
@section('content')
    @include('index.carrusel')
    <br><br>
    <div class="jumbotron">
    	@include('index.avisos')
    	<br>
    	<br>
    	<br>
        @include('index.acerca')
        <br><br><br>
        @include('index.publicaciones')
    </div>

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