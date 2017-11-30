<div class="row">
    {!! Field::file('foto',['label'=>'Imagen de aviso *','accept'=>'.jpg,.png,.gif']) !!}
    {!! Field::file('agenda',['label'=>'Agenda (PDF)','accept'=>'.pdf']) !!}
    {!! Field::file('acuerdos',['label'=>'Acuerdos (PDF)','accept'=>'.pdf']) !!}
	{!! Field::text('titulo',null,['ph'=>'Reunión de trabajo, reuníon de física','required']) !!}
    {!! Field::text('lugar',null,['ph'=>'Guadalajara, San Cristobal, etc','required']) !!}
	{!! Field::textarea('descripcion',null,['class'=>'','required'])!!}
	{!! Field::text('galeria_instagram',null,['ph'=>'https://www.instagram.com/redmexciteg/']) !!}
	{!! Field::date('inicio',null,['required']) !!}
	{!! Field::date('fin',null,['required']) !!}
</div>

