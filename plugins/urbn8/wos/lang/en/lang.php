<?php return [
    'plugin' => [
        'name' => 'wos',
        'description' => '',
        'created_at' => 'Created Time',
        'updated_at' => 'Updated Time',
        'title' => 'WOS',
        'common' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'desc' => 'Description',
            'status' => 'Status',
            'status_options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
            ],
        ],
    ],
    'event' => [
        'category' => [
            'permissions' => [
                'access' => 'Access event categories',
            ],
            'title' => 'Event categories',
        ],
    ],
    'biz' => [
        'type' => [
            'title' => 'Business types',
        ],
    ],
    'lang' => [
        'biz' => [
            'type' => [
                'permissions' => [
                    'access' => 'Access business types',
                ],
            ],
        ],
    ],
];