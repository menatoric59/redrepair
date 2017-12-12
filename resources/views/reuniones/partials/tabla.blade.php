<table id="tabla_reuniones" class="table">
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
    https://www.dropbox.com/l/AADbqUj6hsHE2LpaW5TNmUYaMWxVwpIZ-n0
    @foreach($reuniones as $reunion)
        <tr>
            <td>{{ $reunion->id }}</td>
            <td>
                {!! Html::image($reunion->imagen,'Imagen de renuión',['id'=>'img_preview','width'=>'267']) !!}
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
                    <a href="{{ $reunion->archivo('agenda') }}" target="_blank" class="red-text" data-toggle="modal"><i class="fa fa-file-pdf-o fa-2x"></i> Agenda</a>

                </p>
                {{--
                <p class="text-center">

                    <a href="{{ $reunion->archivo('acuerdo') }}" target="_blank" data-toggle="modal"><i class="fa fa-file-pdf-o fa-2x"></i> Acuerdos</a>

                </p>
                --}}
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

<!-- Modal -->
<div class="modal fade" id="modalSinDocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-info-circle"></i> Sin documento para mostrar</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    Aún no se ha cargado el documento.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

