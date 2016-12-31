@extends('layouts.app')
@section('content')
	<div class="container">
		<h1>Importar Integrantes de la Red</h1>
		{!! Form::open(['route'=>'cargar-integrantes','method'=>'post','enctype'=>'multipart/form-data']) !!}
			{!! Field::file('integrantes') !!}
			{!! Form::submit('Importar',['class'=>'btn btn-primary']) !!}
		{!! Form::close()!!}
	</div>

@endsection