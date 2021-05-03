<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            'birthdate' => [
                'type' => 'date',
                'attrs' => [
                    'null' => true
                ],
                'index' => 4600
            ],
            'birthplace' => [
                'type' => 'VARCHAR',
                'attrs' => [
                    'null' => true
                ],
                'index' => 4700
            ]
        ]
    ]
];
