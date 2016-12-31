@extends('layouts.app')
@section('content')
	<div class="container">
		<h1>Importar Estados</h1>
		{!! Form::open(['route'=>'cargar-estados','method'=>'post','enctype'=>'multipart/form-data']) !!}
			{!! Field::file('estados') !!}
			{!! Form::submit('Importar',['class'=>'btn btn-primary']) !!}
		{!! Form::close()!!}
	</div>

@endsection