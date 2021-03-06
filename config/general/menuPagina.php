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
    'Formación'=>[

        'submenu'=>[
            'Acerca de...'=>['route'=>'formacion'],
            'Seminarios'=>['route'=>'seminarios'],
            'Talleres'=>['route'=>'talleres'],
        ]

    ],
    'Eventos'=>[
        'submenu'=>[
            'De la Red'=>['route'=>['entradas','eventos','de-la-red']],
            'Colaboraciones'=>['route'=>['entradas','eventos','colaboraciones']],
            'Reuniones Nacionales'=>['route'=>['entradas','eventos','reuniones-nacionales']]
        ]
    ],
    'Publicaciones'=>[

        'submenu'=>[
            'Material didáctico'=>['route'=>'material'],
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