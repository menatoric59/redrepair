
@extends('layouts.app')
@section('content')
    @extends('reuniones.partials.breadcrumbs')
    @section('links')
        <li>
            <i class="fa fa-plus-circle"></i>
            Nuevo
        </li>
    @endsection
@verbatim

@endverbatim
    <div class="container" id="app_vue">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route'=>['reuniones.guardar'],'method'=>'post','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}
                {!! Html::image('','Vista previa imagen de anuncio',['id'=>'img_preview','width'=>'267']) !!}

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

<script>
    var editor = CKEDITOR.instances.descripcion;
    CKEDITOR.replace( 'descripcion',{

    } );
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
</script>




@endsection