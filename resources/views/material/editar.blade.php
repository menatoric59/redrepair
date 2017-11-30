
@extends('layouts.app')
@section('content')
    @extends('reuniones.partials.breadcrumbs')
    @section('links')
        <li>
            <i class="fa fa-plus-pencil"></i>
            Editar
        </li>
    @endsection
@verbatim

@endverbatim
    <div class="container" id="app_vue">

        <div class="row">
            <div class="col-md-12">
                {!! Html::image($reunion->imagen,'Imagen del aviso',['class'=>'img-responsive','id'=>'img_preview','width'=>'267']) !!}
                {!! Form::model($reunion,['route'=>['reuniones.actualizar',$reunion->id],'method'=>'put','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                @include('reuniones.partials.campos')
                <a  href="{{ route('reuniones')}}"
                    class="btn grey">
                    Cancelar
                </a>
                {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
                {!! Form::close()!!}

            </div>
        </div>

    </div>

{!! Html::script('ckeditor/ckeditor.js')  !!}
{{--
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
--}}
<script>
    CKEDITOR.replace( 'descripcion',{

    } );
    var editor = CKEDITOR.instances.descripcion;


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