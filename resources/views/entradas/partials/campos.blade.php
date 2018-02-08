<div class="row">
	{!! Field::file('foto',['label'=>'Imagen de entrada *','accept'=>'.jpg']) !!}
	{!! Field::text('nombre',null,['required']) !!}
	{!! Field::textarea('descripcion_html',null,['required'])!!}
    {!! Field::hidden('tipo',$tipo,['required']) !!}
    {!! Field::hidden('subtipo',$subtipo,['required']) !!}
    {!! Field::select('visible_publico',['0'=>'NO','1'=>'SI']) !!}
	{!! Field::text('liga_ver_mas',null,['ph'=>'Ej. www.pagina.com/congreso.html','v-model'=>'liga']) !!}
	{!! Field::text('texto_ver_mas',null,['v-model'=>'texto_liga','ph'=>'Ej. Leer mas..., Saber mas..., etc.']) !!}
	{!! Field::date('inicio_evento',null,['required']) !!}
	{!! Field::date('fin_evento',null,['required']) !!}
    {!! Field::date('inicio_visible',null,['required']) !!}
    {!! Field::date('fin_visible',null,['required']) !!}
</div>
{!! Form::submit('Guardar',['class'=>'btn btn-primary pull-right']) !!}
<a  href="{{ route('integrantes.lista')}}"
    class="btn grey pull-right">
    Cancelar
</a>
{!! Html::script('ckeditor/ckeditor.js')  !!}
<script>
    CKEDITOR.replace( 'descripcion_html',{

    } );
    var editor = CKEDITOR.instances.descripcion_html;


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
    editor.on('change',function () {
        $('#descripcion_prev').html(editor.getData());
    });
    /*


    */

</script>


{{--
$table->string('nombre');
$table->boolean('padre')->default(0);
$table->string('slug');
$table->longText('descripcion_html');
$table->string('plantilla')->nullable();
$table->string('clase_color')->nullable();
$table->string('icono')->nullable();
$table->string('tipo');
$table->string('subtipo');
$table->boolean('visible_publico');
$table->string('liga_ver_mas');
$table->string('texto_ver_mas');
$table->date('inicio_evento');
$table->date('fin_evento');
$table->date('inicio_visible');
$table->date('fin_visible');
--}}