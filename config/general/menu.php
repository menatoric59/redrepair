<?php

return [
	'Inicio'=>['url'=>''],
	'Catálogos'=>[
		'submenu'=>[
			'Integrantes'=>['route'=>'integrantes.lista'],
			'Mapa'=>['route'=>'integrantes.mapa'],
			'Publicaciones'=>['route'=>'publicacion.lista'],
			/*'Publicaciones'=>['route'=>'publicacion.lista'],*/
            'Tipos de publicación'=>['route'=>'tipo-publicacion.lista']
		]
	],
    'Herramientas'=>[
        'submenu'=>[
            'Importar integrantes desde Excel'=>['route'=>'importar-integrantes'],
            'Importar estados desde Excel'=>['route'=>'importar-estados']
        ]
    ]
];