<?php
return [
    // Vai trò mặc định
    'roles' => [
        'admin' => 'administrator',
        'censor' => 'censor',
        'hr' => 'hr',
        'editor' => 'editor',
        'accountant' => 'accountant',
    ],

    //Quyền mặc định
    'permissions' => [
        'edit-product' => 'edit-product',
        'edit-user' => 'edit-user',
        'export' => 'export',
        'view-product' => 'view-product',
        'view-user' => 'view-user',
    ],

    //Định dạng ảnh
    'format_image' => [
        'image/jpeg',
        'image/png'
    ],

    //Blacklist name user
    'blacklist_user' => [
        'all' => [
            'admin',
            'administrator',
            'manager',
            'editor'
        ]
    ],

    'default' =>[
        'avatar' => '../avatars/default-user.png'
    ]


];
