<div class="row">
    <h1 class="light text-center">Avisos</h1>

    @foreach($avisos as $aviso)
        <div class="col-md-6" style="margin-top: 80px;">
            <div class="col-sm-6">
                {!! Html::image($aviso->imagen,'',['class'=>'img-responsive']) !!}

            </div>
            <div class="col-sm-6">
                {!! $aviso->descripcion !!}
                <p>
                    <a href="{{ $aviso->liga }}" target="_blank" class="btn pink">
                        {{ $aviso->texto_liga }}
                    </a>
                </p>

            </div>

        </div>
    @endforeach
</div>
