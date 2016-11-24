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
		
		$.get('/integrantes/json',function($data){
			$arreglo = [];
			$arregloEstado=[];
			$encabezados = ['state','Estado','Integrantes'];
			$encabezadosEstado = ['Element','Cantidad',{ role: "style" }];;
			$arreglo.push ($encabezados);
			$arregloEstado.push($encabezadosEstado);
			$.each($data,function($i,$item){
				$valores = [];
				$valoresEstado =[];
				$aleatorio = Math.floor(Math.random() * (6 - 0) + 0);
				$valores.push($item.estado,$item.nombre,parseInt($item.cantidad));
				$valoresEstado.push($item.nombre,parseInt($item.cantidad),$colores[$aleatorio]);
				$arreglo.push($valores);
				$arregloEstado.push($valoresEstado);
			});

		    google.charts.setOnLoadCallback(drawMarkersMap);
		    google.charts.setOnLoadCallback(drawChartEstados);
		    function drawMarkersMap() {
			    var data = google.visualization.arrayToDataTable($arreglo);
			    
			    var options = {
			        legend: 'Red Mexciteg', // se quita el slider indicador de poblacion minima y maxima
			        region: 'MX',   // region a dibujar en el mapa
			        resolution: 'provinces',    //forma en la que se seccionará el mapa
			        colorAxis: {colors: ['#b2ebf2', '#006064'] },

			    };
			    var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
			    chart.draw(data, options);
		    };
		    function drawChartEstados() {
	    		var data = google.visualization.arrayToDataTable($arregloEstado);
	    		
		      	var view = new google.visualization.DataView(data);
		      	view.setColumns([0, 1,
		            { calc: "stringify",
		            sourceColumn: 1,
		            type: "string",
		            role: "annotation" },
		            2]);

		      	var options = {
			        title: "Entidades de Procedencia",
			        width: 600,
			        height: 400,
			        bar: {groupWidth: "95%"},
			        legend: { position: "none" },
			        animation:{
			        	startup: true,
				        duration: 6000,
				    	easing: 'out',
				    },
			    
		      	};
		      	var chart = new google.visualization.ColumnChart(document.getElementById("chart_estados"));
		      	chart.draw(view, options);
			}

		},"json");
		
		$.get('/integrantes/jsonTipoIntegrante',function($data){
			$arreglo = [];
			$encabezados = ['Element','Cantidad',{ role: "style" }];
			$arreglo.push ($encabezados);

			$.each($data,function($i,$item){
				$valores = [];
				$aleatorio = Math.floor(Math.random() * (6 - 0) + 0);
				$valores.push($item.participacion,parseInt($item.cantidad),$colores[$aleatorio]);
				
				$arreglo.push($valores);
			});
	    	google.charts.setOnLoadCallback(drawChart);
	    	function drawChart() {
	    		var barras_data = google.visualization.arrayToDataTable($arreglo);
	    		
		      var view = new google.visualization.DataView(barras_data);
		      view.setColumns([0, 1,
		                       { calc: "stringify",
		                         sourceColumn: 1,
		                         type: "string",
		                         role: "annotation" },
		                       2]);

		      var options = {
		        title: "Tipo de participacion",
		        width: 600,
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
		      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
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
		        title: "Tipo de adscripcion",
		        width: 600,
		        height: 400,
		        bar: {groupWidth: "95%"},
		        legend: { position: "none" },
		        animation:{
		        	startup: true,
			        duration: 6000,
			    	easing: 'out',
			    },
			    
		      };
		      var chart = new google.visualization.ColumnChart(document.getElementById("chart_adscripcion"));
		      chart.draw(view, options);
			    }
			},'json');


	});
</script>
<h1 class="text-center">Mapa Interactivo</h1>
<div id="chart_div" ></div>	
<div id="columnchart_values" class="col-md-6 col-sm-12"></div>
<div id="chart_estados"  class="col-md-6 col-sm-12"></div>
<div id="chart_adscripcion"  class="col-md-6 col-sm-12"></div>


@endsection