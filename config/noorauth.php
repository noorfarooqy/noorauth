<?php


return [

    'register_domain' => env('REGISTER_DOMAIN', '@salaammfbank\.co\.ke'),
    'default_route' => env('DEFAULT_ROOT', 'index'),

    'modules' => [
        'scm', // school module 
        'sm' // student module
    ],
    'permissions' => [
        'read', 'write', 'update', 'activate', 'deactivate', 'suspend', 'delete',
    ],
    'roles' => [
        [
            'admin' => [
                'allowed_permissions' => [
                    [
                        'module' => 'scm',
                        'permissions' => ['*'],
                    ]
                ],
            ],
        ]
    ],
];
