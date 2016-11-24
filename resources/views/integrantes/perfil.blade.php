@extends('layouts.app')

@section('content')
<div class="row   lighten-2 white-texts valign-wrapper">
	<div class="col-md-6 ">
		{!! Html::image($integrante->imagen_perfil,'',
			[
			'class'=>'pull-right',
			'width'=>'300px',
			'height'=>'400px'
			]) 
		!!}	
	</div>
	<div class="col-md-6 valign">
		<h2>{{ $integrante->nombre }}</h2>
		<ul>
			<li><strong>Adscripción</strong></li>
			<li>{{ $integrante->adscripcion }}</li>
			<li><strong>País</strong></li>
			<li>{{ $integrante->pais }}</li>
			<li><strong>Disciplina</strong></li>
			<li>{{ $integrante->disciplina }}</li>
			<li><strong>SNI</strong></li>
			<li>{{ $integrante->sni }}</li>
			<li><strong>Participación</strong></li>
			<li>{{ $integrante->participacion }}</li>
			<li><strong>Correo</strong></li>
			<li>{{ $integrante->correo }}</li>
		</ul>
	</div>
</div>
<div class="row">
	<hr>
	<div class="col-md-12">
		<h1 class="text-center blue-text text-darken-4">Detalles</h1>
		{!! $integrante->detalle !!}	
	</div>
	
</div>
@endsection()