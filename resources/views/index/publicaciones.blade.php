{{--
<div class="alert pink white-text lighten-1">
    <h1 class="text-center thin">Últimas publicaciones</h1>
</div>
--}}

<div class="">
    <div class="row">
        <h1 class="text-center">Últimas publicaciones</h1>
        <br><br>
        <div class="col-md-6 text-center">
            <h1 class="thin">Libros</h1>
            <br>
            {!! Html::image('assets/biblioteca/publicaciones/2.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            <br>
            <p>
                <a href="{{ route('libros') }}" class="btn btn-info">Ver más</a>
            </p>
        </div>
        <div class="col-md-6 text-center">
            <h1 class="thin">Cuadernos de trabajo</h1>
            <br>
            {!! Html::image('assets/biblioteca/publicaciones/3.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            <br>
            <p>
                <a href="{{ route('cuadernos') }}" class="btn btn-info">Ver más</a>
            </p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6 text-center">
            <h1 class="thin">Revista</h1>
            <br>
            {!! Html::image('assets/biblioteca/publicaciones/4.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            <br>
            <p>
                <a href="{{ route('revista') }}" class="btn btn-info">Ver más</a>
            </p>
        </div>
        <div class="col-md-6 text-center">
            <h1 class="thin">Publicaciones</h1>
            <br>
            {!! Html::image('assets/biblioteca/publicaciones/2.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block']) !!}
            <br>
            <p>
                <a href="{{ route('publicaciones') }}" class="btn btn-info">Ver más</a>
            </p>
        </div>
    </div>
</div>
