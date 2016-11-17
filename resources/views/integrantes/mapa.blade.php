@extends('layouts.limpio')
@section('content')
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
	$(function(){
		$.get('/integrantes/json',function($data){
			$arreglo = [];
			$encabezados = ['state','Estado','Integrantes']
			$arreglo.push ($encabezados);
			$.each($data,function($i,$item){
				$valores = [];
				$valores.push($item.estado,$item.nombre,$item.cantidad);
				$arreglo.push($valores);
			});
			google.charts.load('visualization', '1', {'packages': ['geochart']});
		    google.charts.setOnLoadCallback(drawMarkersMap);
		    function drawMarkersMap() {
			    var data = google.visualization.arrayToDataTable($arreglo);
			    console.log(data);
			    var options = {
			        legend: 'Red Mexciteg', // se quita el slider indicador de poblacion minima y maxima
			        region: 'MX',   // region a dibujar en el mapa
			        resolution: 'provinces',    //forma en la que se seccionará el mapa
			        colorAxis: {colors: ['#b2ebf2', '#006064'] },
			    };
			    var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
			    chart.draw(data, options);
		    };
		},"json");
	});
</script>
<h1 class="text-center">Mapa Interactivo</h1>
<div id="chart_div" ></div>	
<div class="container" id="json_div">
	
</div>

@endsection