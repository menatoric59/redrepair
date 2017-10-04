<div class="row">
	{!! Field::file('foto',['label'=>'Imagen de aviso *','accept'=>'.jpg,.png,.gif']) !!}
	{!! Field::text('tipo',null,['ph'=>'Congreso, taller, etc.','required','v-model'=>'tipo']) !!}
	{!! Field::textarea('descripcion',null,['class'=>'','required'])!!}
	{!! Field::text('liga',null,['ph'=>'Ej. www.pagina.com/congreso.html','v-model'=>'liga']) !!}
	{!! Field::text('texto_liga',null,['v-model'=>'texto_liga','ph'=>'Ej. Leer mas..., Saber mas..., etc.']) !!}
	{!! Field::date('inicio',null,['required']) !!}
	{!! Field::date('fin',null,['required']) !!}



</div>
