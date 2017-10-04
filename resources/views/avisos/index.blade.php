
@extends('layouts.app')

@section('content')
    @extends('avisos.partials.breadcrumbs')

    <div class="container">
        @if(auth()->check())
            <a href="{{ route('avisos.nuevo') }}" class="btn blue lighten-2">
                <i class="fa fa-plus-circle"></i>
                Nuevo
            </a>
        @endif
        <table id="tabla_avisos">
            <thead>
                <th>id</th>
                <th>Aviso</th>
                <th></th>
                @if( auth()->check() )
                    <th>Fechas</th>
                    <th>Editar</th>
                @endif
            </thead>
            <tbody>

                @foreach($avisos as $aviso)
                <tr>
                    <td>{{ $aviso->id }}</td>
                    <td>
                        {!! Html::image($aviso->imagen,'Imagen de anuncio',['id'=>'img_preview','width'=>'267']) !!}
                    </td>
                    <td>
                        <h2>
                            {{ $aviso->tipo }}
                        </h2>
                        <span id="descripcion_prev">
                            {!! $aviso->descripcion !!}
                        </span>
                        <p>
                            <a href= "{{ $aviso->liga }}" target="_blank" class="btn pink" v-if="liga">
                                {{ $aviso->texto_liga }}
                            </a>
                        </p>

                    </td>
                    @if( auth()->check() )
                        <td class="text-{{ $aviso->estatus }}">
                            <p>Del: {{ $aviso->inicio }}</p>
                            <p>Al: {{ $aviso->fin }}</p>
                        </td>
                        <td>
                            <a href="{{ route('avisos.editar',$aviso->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>

                            </a>
                        </td>
                    @endif
                </tr>

                @endforeach()
            </tbody>
        </table>
    </div>
    <script>
        $(function(){
            $('#tabla_avisos').DataTable( {
                "language": {
                    "url": "/js/dataTables.spanish.lang",
                },
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

@endsection