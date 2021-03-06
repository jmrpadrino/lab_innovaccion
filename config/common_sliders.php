<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Slider list
    | Example How to use: @include('slider_support', [ 'sliderID' => 'slider_name', 'slides' => 'slides_group' ])
    |--------------------------------------------------------------------------
    |   Slide configuration list
    |   title                   = string
    |   content                 = string
    |   show_button             = boolean
    |   button_title            = string
    |   button_url              = string = URL, anchor
    |   open_new_tab            = boolean
    |   content_classes         = string = Bootstrap 4 classes or custom class
    |   text_color              = string = white, black, orange, blue, yellow, red, aqua (see CSS file)
    |   background_color        = string = white, black, orange, blue, yellow, red, aqua (see CSS file)
    |   background_image_url    = string = URL
    |   background_blend_mode   = string = normal(default), use CSS regular values
    |   background_position     = string = Use CSS regular values
     */

    'home_slides' => [
        [
            'title'                     => '',
            'content'                   => '',
            'show_button'               => false,
            'button_title'              => 'BOTON EJEMPLO',
            'button_background'         => 'yellow',
            'button_text_color'         => 'white',
            'button_url'                => '#',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'black',
            'background_image_url'      => 'img/home-hero-banner.jpg',
            'background_blend_mode'     => '',
            'background_position'       => 'center',
            'background_size'           => 'cover'
        ],
        [
            'title'                     => '',
            'content'                   => '',
            'show_button'               => false,
            'button_title'              => 'BOTON EJEMPLO',
            'button_background'         => 'yellow',
            'button_text_color'         => 'white',
            'button_url'                => '#',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'black',
            'background_image_url'      => 'img/pexels-pixabay-416405.jpg',
            'background_blend_mode'     => '',
            'background_position'       => 'center',
            'background_size'           => 'cover'
        ],
        [
            'title'                     => '',
            'content'                   => '',
            'show_button'               => false,
            'button_title'              => 'BOTON EJEMPLO',
            'button_background'         => 'yellow',
            'button_text_color'         => 'white',
            'button_url'                => '#',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'black',
            'background_image_url'      => 'img/pexels-pixabay-373543.jpg',
            'background_blend_mode'     => '',
            'background_position'       => 'center',
            'background_size'           => 'cover'
        ],
    ],
    'example_slider' => [
        [
            'title'                     => 'PASO 1',
            'content'                   => 'Contenido para el paso 1',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => '',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 2',
            'content'                   => 'Contenido para el paso 2',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => '',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 3',
            'content'                   => 'Contenido para el paso 3',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => '',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
    ],
    'reporta_slides' => [
        [
            'title'                     => 'PASO 1',
            'content'                   => 'Registra tu necesidad aquí. Recuerda incluir tu información de contacto.',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => 'red',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 2',
            'content'                   => 'Recibirás un correo de confirmación de tu registro',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => 'red',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 3',
            'content'                   => 'Comparte tu necesidad en redes para mayor difusión',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => 'red',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 4',
            'content'                   => 'Cuando un/a ciudadano/a contribuya a tu necesidad, se pondrá en contacto contigo para coordinar la entrega de la colaboración. NOTA: Recuerda seguir nuestras guías de seguridad COVID-19 para receptar una colaboración en persona. ¡Gracias por formar parte de nuestra comunidad!
            ',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => '',
            'background_color'          => 'red',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
    ],
    'colabora_slides' => [
        [
            'title'                     => 'PASO 1',
            'content'                   => 'Explora las necesidades publicadas cerca de ti',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'aqua',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 2',
            'content'                   => 'Selecciona la necesidad en la que deseas colaborar y lee los detalles',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'aqua',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 3',
            'content'                   => 'Haz click en "Colabora ahora" e ingresa el detalle de tu colaboración',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'aqua',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 4',
            'content'                   => 'Toma nota de la ubicación de entrega y el número de contacto. Comunícate con la persona beneficiaria para coordinar la entrega de tu colaboración. NOTA: Recuerda seguir nuestras guías de seguridad COVID-19.',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'aqua',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ],
        [
            'title'                     => 'PASO 5',
            'content'                   => 'Comparte tu colaboración en redes para motivar a más amigos y familiares a contribuir. ¡Gracias por colaborar!',
            'show_button'               => false,
            'button_title'              => 'Ver más',
            'button_url'                => '',
            'open_new_tab'              => false,
            'content_classes'           => 'd-flex flex-column justify-content-center align-items-center text-center',
            'text_color'                => 'white',
            'background_color'          => 'aqua',
            'background_image_url'      => '',
            'background_blend_mode'     => '',
            'background_position'       => '',
            'background_size'           => ''
        ]
    ]
];
