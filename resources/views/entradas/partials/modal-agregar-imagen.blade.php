
<!-- Modal -->
<div class="modal fade" id="modal-agregar-imagen" tabindex="-1" role="dialog" aria-labelledby="modal-agregar-imagenLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-agregar-imagenLabel">Agregar Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>['entrada.agregar-imagen',$tipo,$subtipo,$entrada->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}
                {!! Html::image('','Imagen del aviso',['class'=>'center-block','id'=>'img_preview','width'=>'267']) !!}
                {!! Field::file('foto',['label'=>'Imagen de entrada *','accept'=>'.jpg']) !!}
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_preview').show();
                $('#img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#foto").change(function(){
        readURL(this);
    });
</script>