

<div class="row">
    @foreach(\App\Entrada::ultimas('eventos') as $entrada)
        @if($entrada->padre)
            <h1 class="thin text-center {!! $entrada->clase_color !!} white-text" style="padding-top: 20px;padding-bottom: 20px">
                {{$entrada->nombre}}
            </h1>
        @else
            <div class="col-md-12">
                <br><br><br>
                <h1 class="thin text-center">
                    {!! $entrada->nombre !!}
                </h1>
                <p class="text-center">
                    <small class="text-muted text-center" style="font-style: italic">{!! $entrada->fecha_entrada !!}</small>
                </p>
                <br>
                <div class="col-md-6">
                    @foreach($entrada->imagenes() as $imagen)
                        <div>
                            {!! Html::image($imagen['nombre'],'Vista previa entrada',['class'=>'center-block img-responsive img-thumbnail']) !!}
                        </div>
                    @endforeach

                </div>
                <div class="col-md-6">
                    {!! $entrada->descripcion_html !!}
                    @if($entrada->liga_ver_mas)
                        <p>
                            <a href="{!! $entrada->liga_ver_mas !!}" class="btn btn-info" target="_blank">
                                {!! $entrada->texto_ver_mas !!}
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        @endif
    @endforeach

</div>
