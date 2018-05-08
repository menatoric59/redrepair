
@extends('layouts.app')
@extends('publicaciones.partials.breadcrumbs')
@section('titulo')
    Libros
@endsection
@section('links')
    <li><i class="fa fa-pencil-square"></i> Libros</li>
@endsection
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://es.scribd.com/document/366059077/Genero-ciencia-y-tecnologia-en-las-politicas-publicas-mexicanas" target="_blank">
                        {!! Html::image('assets/biblioteca/libros/libro4.jpg?'.date('y-m-d'),'Libro 4',['width'=>'300']) !!}
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="https://es.scribd.com/document/365977839/Equidad-de-genero-en-educacion-superior-y-ciencia" target="_blank">
                        {!! Html::image('assets/biblioteca/libros/libro2.jpg?'.date('y-m-d'),'Libro 2',['width'=>'300']) !!}
                    </a>
                </div>
            </div>
            <br><br><br><br><br>
            <div class="row">
                <div class="col-md-6">
                    <a href="https://es.scribd.com/document/378590328/Genero-y-Politicas-Publicas-en-Ciencia-y-Educacion-Superior-en-Mexico" target="_blank">
                        {!! Html::image('assets/biblioteca/libros/libro3.jpg?'.date('y-m-d'),'Libro 3',['width'=>'300']) !!}
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://docs.wixstatic.com/ugd/b39ed3_a5b59285c1e54aea8974b139f97bf209.pdf" target="_blank">
                        {!! Html::image('assets/biblioteca/libros/libro1.jpg?'.date('y-m-d'),'Libro 1',['width'=>'300']) !!}
                    </a>
                </div>

            </div>
        </div>



    </div>
{{--
https://es.scribd.com/document/365977839/Equidad-de-genero-en-educacion-superior-y-ciencia
https://es.scribd.com/document/366044956/Genero-y-Politicas-Publicas-en-Ciencia-y-Educacion-Superior-en-Mexico
--}}
@endsection