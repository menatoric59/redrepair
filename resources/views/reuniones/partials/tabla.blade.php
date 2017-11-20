<table id="tabla_reuniones">
    <thead>
    <th>id</th>
    <th></th>
    <th></th>
    <th>Archivos</th>
    @if( auth()->check() )
        <th>Fechas</th>
        <th>Editar</th>
    @endif
    </thead>
    <tbody>

    @foreach($reuniones as $reunion)
        <tr>
            <td>{{ $reunion->id }}</td>
            <td>
                {!! Html::image($reunion->imagen,'Imagen de renuion',['id'=>'img_preview','width'=>'267']) !!}
            </td>
            <td>
                <h2>
                    {{ $reunion->titulo }}
                </h2>
                <h5>
                    {{ $reunion->lugar }}
                </h5>
                <p>
                    Del {{ $reunion->inicioTexto }}
                </p>
                <p>
                    al {{ $reunion->finTexto }}
                </p>
                <span id="descripcion_prev">
                            {!! $reunion->descripcion !!}
                        </span>
            </td>
            <td>
                <p class="text-center">
                    <a href="{{ $reunion->archivo('agenda') }}" target="_blank" class="red-text"><i class="fa fa-file-pdf-o fa-2x"></i> Agenda</a>

                </p>
                <p class="text-center">
                    {{----}}
                    <a href="{{ $reunion->archivo('acuerdo') }}" target="_blank"><i class="fa fa-file-pdf-o fa-2x"></i> Acuerdos</a>

                </p>
            </td>
            @if( auth()->check() )
                <td class="text-{{ $reunion->estatus }}">
                    <p>Del: {{ $reunion->inicio }}</p>
                    <p>Al: {{ $reunion->fin }}</p>
                </td>
                <td>
                    <a href="{{ route('reuniones.editar',$reunion->id) }}" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>

                    </a>
                </td>
            @endif
        </tr>

    @endforeach()
    </tbody>
</table>