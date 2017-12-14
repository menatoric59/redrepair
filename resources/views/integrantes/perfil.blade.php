@extends('layouts.app')

@section('content')
	@extends('integrantes.partials.breadcrumbs')
	@section('links')
		<li>{!! auth()->check() ?
			'<a href="' . route('integrante.editar',$integrante->id) . '" class="white-text">' . $integrante->nombre . '</a>' :
			$integrante->nombre !!}
		</li>
	@endsection
	<br>
	<h2 class="text-center">{{ $integrante->nombre }}</h2>
	<div class="col-md-12 lighten-2 white-texts valign-wrapper">
		<div class="col-md-6 col-sm-12">

			{!! Html::image($integrante->imagen_perfil . '?'.time() ,'Imagen del perfil',
				[
				'class'=>'pull-right img-responsive valign',

				])
			!!}
		</div>
		<div class="col-md-6 col-sm-12 valign">
			<ul>
				<li><strong>Institución</strong></li>
				<li>{{ $integrante->institucion }}</li>
				<li><strong>Dependencia</strong></li>
				<li>{{ $integrante->dependencia }}</li>
				<li><strong>País</strong></li>
				<li>{{ $integrante->pais }}</li>
				<li><strong>Campo</strong></li>
				<li>{{ $integrante->campo }}</li>
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
	<div class="col-md-12">
		<hr>
		<div class="col-md-12">
			<h1 class="text-center blue-text text-darken-4">Perfil</h1>
			<div class="container">
				{!! $integrante->detalle !!}
			</div>
		</div>
	</div>
	{{ $img = Image::make($integrante->imagen_perfil) }}
@endsection()