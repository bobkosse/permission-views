<?php

use Illuminate\Support\Env;

return [
    'auto_sync' => Env('AUTO_SYNC_PERMISSIONS', false),
    'permissions' => [
        [
            'group_name' => 'User management',
            'permissions' => [
                'can_add_users' => 'web',
                'can_delete_users' => 'web',
                'can_edit_users' => 'web',
                'can_view_users' => 'web'
            ]
        ],
        [
            'group_name' => 'Role management',
            'permissions' => [
                'can_add_role' => 'web',
                'can_delete_role' => 'web',
                'can_edit_role' => 'web',
                'can_view_role' => 'web'
            ]
        ]

    ],
    'roles' => [
        'Admin' => [
            'guard' => 'web',
            'permissions' => [
                '*'
            ]
        ],
        'User manager' => [
            'guard' => 'web',
            'permissions' => [
                'can_add_users',
                'can_delete_users',
                'can_edit_users',
                'can_view_users'
            ]
        ]

    ]
];
