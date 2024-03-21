<?php


return [

    'register_domain' => env('REGISTER_DOMAIN', '@salaammfbank\.co\.ke'),
    'default_route' => env('DEFAULT_ROOT', 'index'),
    'disable_registration' => env('DISABLE_NA_REGISTRATION', false),
    'disable_login' => env('DISABLE_NA_LOGIN', false),

    'modules' => [
        'scm', // school module 
        'sm' // student module
    ],
    'permissions' => [
        'read', 'write', 'update', 'activate', 'deactivate', 'suspend', 'delete',
    ],
    'roles' => [
        'admin' => [
            'allowed_permissions' => [
                [
                    'module' => 'scm',
                    'permissions' => ['*'],
                ]
            ],
        ],
    ],
    'password_reset_exceptions_routes' => [
        'accounts/*', 'api/accounts/*'
    ],
];
