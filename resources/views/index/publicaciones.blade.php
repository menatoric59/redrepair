

<div class="row">
    
    <h1 class="thin text-center teal accent-4 white-text">Últimas publicaciones</h1>
    <div class="row">
        <div class="col-md-4 text-center">
            <h1 class="thin">Libros</h1>
            <br>
            <a href="http://docs.wixstatic.com/ugd/b39ed3_a5b59285c1e54aea8974b139f97bf209.pdf" target="_blank" class="img-responsive">
                {!! Html::image('assets/biblioteca/publicaciones/2.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            </a>
            <br>
            <p>
                <a href="{{ route('libros') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <h1 class="thin">Cuadernos</h1>
            <br>
            <a href="http://docs.wixstatic.com/ugd/b39ed3_fb069af6bdd247abb167af93dbf72e9a.pdf" target="_blank" class="img-responsive">
                {!! Html::image('assets/biblioteca/publicaciones/3.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            </a>
            <br>
            <p>
                <a href="{{ route('cuadernos') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <h1 class="thin">Revista</h1>
            <br>
            <a href="{{ route('revista') }}" class="img-responsive">
                {!! Html::image('assets/biblioteca/publicaciones/4.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            </a>
            <br>
            <p>
                <a href="{{ route('revista') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
        <br><br>
    </div>

</div>
