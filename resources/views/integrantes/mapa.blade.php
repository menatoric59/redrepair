@extends('layouts.app')
@section('content')
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script type='text/javascript'>
	$(function(){
		$colores = [
			'#f06292',
			'#e5737',
			'#ba68c8',
			'#9575cd',
			'#7986cb',
			'#64b5f6',
			'#dce775',

		]
		google.charts.load(
			'visualization', '1', 
			{
				'packages': [	
							'geochart',
							'corechart'
							]
			}
		);

        $.get('/integrantes/json',function($dataJsonMapa){
			$arregloMapa = [];
			$arregloEstado=[];
			$encabezadosMapa = ['state','Estado','Integrantes'];
			$encabezadosEstado = ['Element','Cantidad',{ role: "style" }];
			$arregloMapa.push ($encabezadosMapa);
			$arregloEstado.push($encabezadosEstado);
			$.each($dataJsonMapa,function($i,$item){
				$valoresMapa = [];
				$valoresEstado =[];
				$aleatorio = Math.floor(Math.random() * (6 - 0) + 0);
				$valoresMapa.push($item.estado,$item.nombre,parseInt($item.cantidad));
				$valoresEstado.push($item.nombre,parseInt($item.cantidad),$colores[$aleatorio]);
				$arregloMapa.push($valoresMapa);
				$arregloEstado.push($valoresEstado);
			});

		    google.charts.setOnLoadCallback(drawMarkersMap);
		    google.charts.setOnLoadCallback(drawChartEstados);
		    function drawMarkersMap() {
			    var dataMapa = google.visualization.arrayToDataTable($arregloMapa);
			    
			    var optionsMapa = {
			        legend: 'Red Mexciteg', // se quita el slider indicador de poblacion minima y maxima
			        region: 'MX',   // region a dibujar en el mapa
			        resolution: 'provinces',    //forma en la que se seccionará el mapa
			        colorAxis: {colors: ['#b2ebf2', '#006064'] },

			    };
			    var chart = new google.visualization.GeoChart(document.getElementById('div_mapa_mexico'));
			    chart.draw(dataMapa, optionsMapa);
		    };
		    function drawChartEstados() {
	    		var dataEstados = google.visualization.arrayToDataTable($arregloEstado);
	    		
		      	var view = new google.visualization.DataView(dataEstados);
		      	view.setColumns([0, 1,
		            { calc: "stringify",
		            sourceColumn: 1,
		            type: "string",
		            role: "annotation" },
		            2]);

		      	var options = {
			        title: "Entidades de Procedencia",
			        //width: 300,
			        height: 400,
			        bar: {groupWidth: "95%"},
			        legend: { position: "none" },
			        animation:{
			        	startup: true,
				        duration: 6000,
				    	easing: 'out',
				    },
			    
		      	};
		      	var chart = new google.visualization.ColumnChart(document.getElementById("div_chart_estados"));
		      	chart.draw(view, options);
			}

		},"json");

		$.get('/integrantes/jsonTipoIntegrante',function($dataJsonIntegrantes){
			$arregloTipoIntegrante = [];
			$encabezadosTipoIntegrante = ['Element','Cantidad',{ role: "style" }];
			$arregloTipoIntegrante.push ($encabezadosTipoIntegrante);

			$.each($dataJsonIntegrantes,function($i,$item){
				$valoresTipoIntegrante = [];
				$aleatorio = Math.floor(Math.random() * (6 - 0) + 0);
				$valoresTipoIntegrante.push($item.participacion,parseInt($item.cantidad),$colores[$aleatorio]);
				
				$arregloTipoIntegrante.push($valoresTipoIntegrante);
			});
	    	google.charts.setOnLoadCallback(drawChart);
	    	function drawChart() {
	    		var dataTipoIntegrante = google.visualization.arrayToDataTable($arregloTipoIntegrante);
	    		
		      var view = new google.visualization.DataView(dataTipoIntegrante);
		      view.setColumns([0, 1,
		                       { calc: "stringify",
		                         sourceColumn: 1,
		                         type: "string",
		                         role: "annotation" },
		                       2]);

		      var options = {
		        title: "Tipo de participación",
		        //width: 300,
		        height: 400,
		        bar: {groupWidth: "95%"},
		        legend: { position: "none" },
		        animation:{
		        	startup: true,
			        duration: 6000,
			    	easing: 'out',
			    },
			    colorAxis: {colors: ['#b2ebf2', '#006064'] },
		      };
		      var chart = new google.visualization.ColumnChart(document.getElementById("div_chart_participacion"));
		      chart.draw(view, options);
			    }
			},'json');


		$.get('/integrantes/jsonTipoAdscripcion',function($data){
			$arreglo = [];
			$encabezados = ['Element','Cantidad',{ role: "style" }];
			$arreglo.push ($encabezados);

			$.each($data,function($i,$item){
				$valores = [];
				$aleatorio = Math.floor(Math.random() * (6 - 0) + 0);
				$valores.push($item.adscripcion,parseInt($item.cantidad),$colores[$aleatorio]);
				
				$arreglo.push($valores);
			});
	    	google.charts.setOnLoadCallback(drawChartAdscripcion);
	    	function drawChartAdscripcion() {
	    		var barras_data = google.visualization.arrayToDataTable($arreglo);
	    		
		      var view = new google.visualization.DataView(barras_data);
		      view.setColumns([0, 1,
		                       { calc: "stringify",
		                         sourceColumn: 1,
		                         type: "string",
		                         role: "annotation" },
		                       2]);

		      var options = {
		        title: "Institución de Adscripción",
		        //width: 100,
		        height: 400,
		        bar: {groupWidth: "95%"},
		        legend: { position: "none" },
		        animation:{
		        	startup: true,
			        duration: 6000,
			    	easing: 'out',
			    },
			    
		      };
		      var chart = new google.visualization.ColumnChart(document.getElementById("div_chart_adscripcion"));
		      chart.draw(view, options);
			    }
			},'json');
	});
</script>
<div class="container">
	<h1 class="text-center">Cartografía</h1>
	<div id="div_mapa_mexico"></div>	
</div>

<div class="row">
	<h1 class="text-center">Gráficas</h1>
	<div class="col-lg-4 col-md-12 center-block" id="div_chart_participacion"></div>
	<div class="col-lg-4 col-md-12" id="div_chart_estados"></div>
	<div class="col-lg-4 col-md-12" id="div_chart_adscripcion"></div>
</div>
<br>
<br>
<br>
<div class="row">
	<h1 class="text-center">Colaboraciones</h1>
	<img src="{{ asset('assets/sobre-la-red/cartografia/colaboraciones.jpg') }}" alt="Gráfica de colaboraciones" class="center-block img-responsive">
</div>

@endsection