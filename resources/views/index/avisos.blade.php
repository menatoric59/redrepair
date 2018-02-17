<div class="row">
    @foreach(\App\Entrada::ultimas('avisos') as $entrada)
        @if($entrada->padre)
            <h1 class="thin text-center {!! $entrada->clase_color !!} white-text" style="padding-top: 20px;padding-bottom: 20px">
                {{$entrada->nombre}}
            </h1>
        @else
            <div class="col-md-9">
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

    <div class="col-md-3 hidden-md-down">
        <br><br>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRedMexciteg%2F&tabs=timeline&width=250&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
</div>



{{-- Antes de implementar los Avisos como parte de las Entradas
<div class="row">
    <h1 class="thin text-center blue lighten-2 white-text" style="padding-top: 20px;padding-bottom: 20px">Avisos</h1>
    <div class="row">
        <div class="col-md-9">
            @foreach($avisos as $aviso)
                <div class="row">
                    <br><br>

                    <br><br>
                    <div class="col-md-6">
                        {!! Html::image($aviso->imagen,'',['class'=>'img-responsive center-block']) !!}
                    </div>
                    <div class="col-md-6">
                        <p>
                            {!! $aviso->descripcion !!}
                        </p>
                        <p>
                            <a href="{{ $aviso->liga }}" target="_blank" class="btn pink">
                                {{ $aviso->texto_liga }}
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 hidden-md-down">
            <br><br>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRedMexciteg%2F&tabs=timeline&width=340&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
--}}