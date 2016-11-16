@extends('layouts.limpio')
@section('content')
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
	$(function(){
		//alert('jquery');
		$.get('/integrantes/json',function($data){
			console.log($data);
			$arreglo = ['States','Estado','No'];
			$.each($data,function(i,item){
				$arreglo.push($item.estado);
			});
			console.log($arreglo);
		},"json");
	});
    google.charts.load('visualization', '1', {'packages': ['geochart']});
    google.charts.setOnLoadCallback(drawMarkersMap);
    function drawMarkersMap() {
	    var data = google.visualization.arrayToDataTable([
			['States','Estado','No. de integrantes'],   
			['MX-MEX','Estado de Mexico',16396826],
			['MX-DIF','Ciudad de México',8891375],
			['MX-VER','Veracruz',7931295],
			['MX-JAL','Jalisco',7754609],
			['MX-PUE','Puebla',6075839],
			['MX-GUA','Guanajuato',5726157],
			['MX-CHP','Chiapas',5127866],
			['MX-NLE','Nuevo Leon',4950328],
			['MX-MIC','Michoacan de Ocampo',4534280],
			['MX-OAX','Oaxaca',3962574],
			['MX-CHH','Chihuaha',1],
			['MX-ZAC','Zacatecas',1551805],
			['MX-ROO','Quintana Roo',1490711],
			['MX-AGU','Aguascalientes',1254540],
			['MX-TLA','Tlaxcala',1245022],
			['MX-NAY','Nayarit',1181299],
			['MX-CAM','Campeche',882076],
			['MX-BCS','Baja California Sur',721106],
			['MX-COL','Colima',699909]
        ]);
	    var options = {
	        legend: 'Red Mexciteg', // se quita el slider indicador de poblacion minima y maxima
	        region: 'MX',   // region a dibujar en el mapa
	        resolution: 'provinces',    //forma en la que se seccionará el mapa
	        colorAxis: {colors: ['#b2ebf2', '#006064'] },
	    };
	    var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
	    chart.draw(data, options);
    };
</script>
<h1 class="text-center">Mapa Interactivo</h1>
<div id="chart_div" ></div>	
<div class="container" id="json_div">
	
</div>

@endsection