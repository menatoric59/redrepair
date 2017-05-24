@extends('layouts.app')
@section('content')
    @include('index.carrusel')
    <br><br><br><br><br>
    <div class="jumbotron">
        @include('index.acerca')
        <br><br><br><br><br>
        @include('index.publicaciones')
    </div>



@endsection()