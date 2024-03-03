<?php



return [
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
];
