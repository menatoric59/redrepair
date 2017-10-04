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
            'Plataforma'=>['route'=>'login','icon'=>'lock'],
        ]

    ],
    'Publicaciones'=>[

        'submenu'=>[
            'Cuadernos de trabajo'=>['route'=>'cuadernos'],
            'Revista De este lado'=>['route'=>'revista'],
            'Libros'=>['route'=>'libros'],
        ]

    ],
    'Biblioteca'=>[
        'submenu'=>[
            'Catálogo de publicaciones'=>['route'=>'publicaciones'],
        ]
    ],
    'Contacto'=>['route'=>'contacto'],
];