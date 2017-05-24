
@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <h1 class="text-center thin">Libros</h1>
        <a href="http://docs.wixstatic.com/ugd/b39ed3_a5b59285c1e54aea8974b139f97bf209.pdf" target="_blank">
            {!! Html::image('assets/biblioteca/libros/libro1.jpg','Libro 1',['class'=>'center-block img-responsive']) !!}
        </a>

    </div>

@endsection