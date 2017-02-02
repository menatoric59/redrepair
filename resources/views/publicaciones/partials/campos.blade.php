<div class="row">
	{!! Field::file('imagen',['label'=>'Imagen o portada (jpg)','accept'=>'.jpg']) !!}
	{!! Field::file('indice',['label'=>'Índice (jpg)','accept'=>'.jpg']) !!}
	{!! Field::text('titulo',null,['required']) !!}
	{!! Field::text('tipo_publicacion',null,['required']) !!}	
	{!! Field::text('publicado_en',null,['required']) !!}
	{!! Field::number('anio',null,['required']) !!}
	{!! Field::text('ciudad',null,['required']) !!}	
	{!! Field::text('editorial',null,['required']) !!}
	{!! Field::text('URL',null,[]) !!}
</div>
<div class="row">
	<label>Sinopsis</label>
	{!! Form::textarea('sinopsis_html',null,['class'=>'ckeditor','col'=>'2']) !!}
</div>
{{--
<div class="row">
	<h2>Detalle:</h2>
	{!! Form::textarea('detalle',null,['class'=>'ckeditor'])!!}	
</div>
--}}
