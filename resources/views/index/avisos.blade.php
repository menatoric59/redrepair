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
    {{--
    <div class="col-md-6">
        <div class="col-sm-6">
            {!! Html::image('assets/index/avisos/seminarioSeptiembre2017.jpg','',['class'=>'img-responsive']) !!}    
        </div>
        <div class="col-sm-6">
            <p>
                <b>CONVOCATORIA:</b> a las mujeres mexicanas estudiantes de posgrado PNPC, postdoctorantes o investigadoras jóvenes, de Ámerica Latina de todas las áreas de ciencia y tecnología e innovación.
                
            </p>
            <a href="http://www.ifuap.buap.mx/eventos/SFHPPG17/" target="_blank" class="btn pink">Saber más...</a>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="col-md-6">
            {!! Html::image('assets/index/avisos/homenajeLourdes.jpg','',['class'=>'img-responsive']) !!}    
        </div>
        <div class="col-sm-6">
            <p>
                <b>Video</b> del evento del Homenaje a la Dra. Lourdes Elena Fernández Rius <br>
                <b>Realización:</b> Victor Manuel Méndez Villanueva, Wendy Ariadna Gallardo Campos   
            </p>
            <a href="http://www.medios.ceiich.unam.mx/video/172/" target="_blank" class="btn pink">Ver video...</a>
        </div>
    </div>
    --}}
</div>
