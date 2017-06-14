@extends('layouts.app')
@section('content')
    @include('index.carrusel')
    <br><br>
    <div class="jumbotron">
    	@include('index.avisos')
    	<br>
    	<br>
    	<br>
        @include('index.acerca')
        <br><br><br>
        @include('index.publicaciones')
    </div>



@endsection()