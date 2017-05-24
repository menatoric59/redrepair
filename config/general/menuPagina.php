<?php

return [
	'Inicio'=>['url'=>''],
    'Sobre la red'=>[
        'submenu'=>[
            'Quiénes somos'=>['route'=>'quienes-somos'],
            'Historia'=>['route'=>'historia'],
            'Directorio'=>['route'=>'integrantes.lista'],
            'Cartografía e interrelaciones'=>['route'=>'integrantes.mapa'],
        ]

    ],
    'Qué hacemos'=>['route'=>'que-hacemos'],
    'Publicaciones'=>[

        'submenu'=>[
            'Cuadernos de trabajo'=>['route'=>'cuadernos'],
            'De este lado (revista)'=>['route'=>'revista'],
            'Libros'=>['route'=>'libros'],
            /*'Cartografía e interrelaciones'=>['route'=>'integrantes.mapa'],*/
        ]

    ],
    'Biblioteca'=>[
        'submenu'=>[
            'Catálogo de publicaciones'=>['route'=>'publicaciones'],
            /*'De este lado (revista)'=>['route'=>'revista'],
            'Directorio'=>['route'=>'integrantes.mapa'],
            'Cartografía e interrelaciones'=>['route'=>'integrantes.mapa'],*/
        ]
    ],
    'Contacto'=>['route'=>'tipo-publicacion.lista'],
];