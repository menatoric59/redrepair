
@extends('layouts.app')
@section('content')
    @extends('avisos.partials.breadcrumbs')
    @section('links')
        <li>
            <i class="fa fa-plus-circle"></i>
            Nuevo
        </li>
    @endsection

    <div class="container" id="app_vue">

        <div class="row">
            <div class="col-md-12">
            <div class="col-md-6">
                {!! Form::open(['route'=>['avisos.guardar'],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                @include('avisos.partials.campos')
                <a  href="{{ route('integrantes.lista')}}"
                    class="btn grey">
                    Cancelar
                </a>
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
                {!! Form::close()!!}
            </div>
            <div class="col-md-6">
                <h1 class="text-center thin">Vista previa del Aviso</h1>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::image('','Vista previa imagen de anuncio',['id'=>'img_preview','width'=>'267']) !!}
                    </div>
                    <div class="col-sm-6">
                        <span id="descripcion_prev">


                        </span>

                        <a v-bind:href= "liga" target="_blank" class="btn pink" v-if="liga">
                            @{{ texto_liga }}
                        </a>
                    </div>
                </div>

            </div>
            </div>
        </div>

    </div>

{!! Html::script('ckeditor/ckeditor.js')  !!}
<script>
    var app_vue = new Vue({
        el: '#app_vue',
        data: {
            tipo:'',
            liga:'',
            texto_liga:'',
        }
    })

</script>
<script>
    CKEDITOR.replace( 'descripcion',{

    } );
    var editor = CKEDITOR.instances.descripcion;

    $('#img_preview').hide();
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




@endsection