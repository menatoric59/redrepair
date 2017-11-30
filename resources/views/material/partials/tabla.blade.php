<table id="tabla_material">
    <thead>

    <th>Imagen</th>
    <th>Descripción</th>
    @if( auth()->check() )
        <th>Editar</th>
    @endif
    </thead>
    <tbody>
        <tr>
            <td>
                <a href="/assets/biblioteca/material1.pdf" target="_blank" class="red-text" data-toggle="modal">
                {!! Html::image('assets/biblioteca/material1.jpg','Vista previa material',['id'=>'img_preview','width'=>'267']) !!}
                </a>
            </td>
            <td>
                <h2>
                    Guía educativa para el profesorado de bachillerato
                </h2>
                <p id="descripcion_prev">
                    Género, Ciencia y Práctica Docente en el Bachillerato
                </p>
            </td>

            @if( auth()->check() )
                <td>
                    <a href="{{ route('reuniones.editar',1) }}" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>

                    </a>
                </td>
            @endif
        </tr>

        <tr>
            <td>
                <a href="/assets/biblioteca/material2.pdf" target="_blank" class="red-text" data-toggle="modal">
                    {!! Html::image('assets/biblioteca/material2.jpg','Vista previa material',['id'=>'img_preview','width'=>'267']) !!}
                </a>
            </td>
            <td>
                <h2 class="text-center">
                    Guía educativa para el profesorado de bachillerato
                </h2>
                <p id="descripcion_prev">
                    Género, Ciencia y Práctica Docente en el Bachillerato
                </p>
            </td>

            @if( auth()->check() )
                <td>
                    <a href="{{ route('reuniones.editar',$reunion->id) }}" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>

                    </a>
                </td>
            @endif
        </tr>
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
@include('material.partials.scripts')