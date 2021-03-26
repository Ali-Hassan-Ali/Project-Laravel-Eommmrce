<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [

        'super_admin' => [
            'dashboard'        => 'r',
            'users'            => 'c,r,u,d',
            'cupons'           => 'c,r,u,d',
            'parent_categorys' => 'c,r,u,d',
            'sub_categories'   => 'c,r,u,d',
            'markets'          => 'c,r,u,d',
            'carts'            => 'c,r,u,d',
        ],

        'admin' => [
            'dashboard' => 'r',
        ],
        
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
