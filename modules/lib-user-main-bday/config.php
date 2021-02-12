<?php

return [
    '__name' => 'lib-user-main-bday',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-bday.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-bday' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ]
        ],
        'optional' => [
            [
                'lib-formatter' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'birthdate' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
