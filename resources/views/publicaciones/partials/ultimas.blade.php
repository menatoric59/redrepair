<div class="row">
    <br><br><br>
    <div class="col-md-6">
        <h1 class="thin text-center">Material didáctico</h1>
        <br>
        <div class="col-md-6">
            <a href="/assets/biblioteca/material1.pdf" target="_blank" class="red-text" data-toggle="modal">
                {!! Html::image('assets/biblioteca/material1.jpg','Vista previa material',['class'=>'center-block img-responsive','id'=>'img_preview']) !!}
            </a>
        </div>
        <div class="col-md-6">
            <h3>
                Guía educativa para el profesorado de bachillerato
            </h3>
            <p id="descripcion_prev">
                Género, Ciencia y Práctica Docente en el Bachillerato
            </p>
            <p>
                <a href="{{ route('material') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <h1 class="thin text-center">Libros</h1>
        <br>
        <div class="col-md-6">
            <a href="http://docs.wixstatic.com/ugd/b39ed3_a5b59285c1e54aea8974b139f97bf209.pdf" target="_blank" class="img-responsive">
                {!! Html::image('assets/biblioteca/libros/libro1.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block img-responsive']) !!}
            </a>
        </div>
        <div class="col-md-6">
            <h2>
                Lecturas Críticas en Investigación Feminista
            </h2>
            <p>
                <a href="{{ route('libros') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
    </div>

</div>
<br><br>
<div class="row">
    <div class="col-md-6">
        <h1 class="text-center thin">Cuadernos</h1>
        <br>
        <div class="col-md-6">
            <a href="http://docs.wixstatic.com/ugd/b39ed3_fb069af6bdd247abb167af93dbf72e9a.pdf" target="_blank" class="img-responsive">
                {!! Html::image('assets/biblioteca/publicaciones/3.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'img-responsive']) !!}
            </a>
        </div>
        <div class="col-md-6">
            <h2>
                Cuaderno de Trabajo No. 6
            </h2>
            <p id="descripcion_prev">
                Experiencias Interdisciplinarias de Formación en Ciencia y Tecnología con Perspectiva de Género
            </p>
            <p>
                <a href="{{ route('cuadernos') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
    </div>
    <div class="col-md-6">
        <h1 class="text-center thin">Revista</h1>
        <br>
        <div class="col-md-6">
            <a href="{{ route('revista') }}">
                {!! Html::image('assets/biblioteca/publicaciones/4.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'img-responsive']) !!}
            </a>
        </div>
        <div class="col-md-6">
            <h2>
                De Este Lado
            </h2>
            <p id="descripcion_prev">
                Revista Feminista de Divulgación Científica
            </p>
            <p>
                <a href="{{ route('revista') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
    </div>
</div>


{{--
<div class="row">


    <div class="row">

        <div class="col-md-3 text-center">
            <h1 class="thin">Material didáctico</h1>
            <br>
            <a href="http://docs.wixstatic.com/ugd/b39ed3_a5b59285c1e54aea8974b139f97bf209.pdf" target="_blank" class="img-responsive">
                {!! Html::image('assets/biblioteca/material1.jpg' . '?' . date('Y-m-d h:m') ,'Último cuaderno',['class'=>'center-block','height'=>'400px']) !!}
            </a>
            <br>
            <p>
                <a href="{{ route('libros') }}" class="btn btn-info">Ver todos</a>
            </p>
        </div>
        <div class="col-md-3 text-center">
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
        <div class="col-md-3 text-center">
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
        <div class="col-md-3 text-center">
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
--}}