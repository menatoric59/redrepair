<?php

return [
	'Inicio'=>['url'=>''],
    'Sobre la red'=>[
        'submenu'=>[
            'Qué hacemos'=>['route'=>'que-hacemos'],
            'Quiénes somos'=>['route'=>'quienes-somos'],
            'Historia'=>['route'=>'historia'],
            'Directorio'=>['route'=>'integrantes.lista'],
            'Cartografía e interrelaciones'=>['route'=>'integrantes.mapa'],
        ]

    ],
    'Publicaciones'=>[

        'submenu'=>[
            'Cuadernos de trabajo'=>['route'=>'cuadernos'],
            'Revista De este lado'=>['route'=>'revista'],
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
    'Contacto'=>['route'=>'contacto'],
];