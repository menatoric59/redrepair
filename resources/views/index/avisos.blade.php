<div class="row">
    <h1 class="light text-center blue lighten-2 white-text">Avisos</h1>


        <div class="row">
            <div class="col-md-9">
                @foreach($avisos as $aviso)
                    <div class="row">
                        <br><br>
                        <h2 class="text-center thin">{!! $aviso->tipo !!}</h2>
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

        {{--
        <div class="col-md-6" style="margin-top: 80px;">
            <div class="col-sm-6">


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
        --}}

</div>
