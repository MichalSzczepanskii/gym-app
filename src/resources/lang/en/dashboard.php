<?php

return [
    'home' => 'Dashboard',
    'logs' => 'Logs',
    'attribute' => [
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
    ],
    'carnets' => [
        'title' => 'Carnets',
        'add' => 'Add carnet',
        'edit' => 'Edit carnet',
        'attribute' => [
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
        ],
        'flashes' => [
            'success' => [
                'stored' => 'Carnet :name was added.',
                'updated' => 'Carnet :name was updated.',
                'nothing-changed' => 'Carnet :name was not changed.',
            ]
        ],
        'form' => [
            'title' => 'Basic info'
        ]
    ],
    'clients' => [
        'title' => 'Clients',
        'add' => 'Add client',
        'edit' => 'Edit client',
        'attribute' => [
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'pesel' => 'Pesel',
        ],
        'flashes' => [
            'success' => [
                'stored' => 'User :first_name :last_name was added',
                'updated' => 'User :first_name :last_name was updated.',
                'nothing-changed' => 'User :first_name :last_name was not changed.',
            ]
        ],
        'form' => [
            'title' => 'Basic info'
        ]
    ],
    'contracts' => [
        'title' => 'Contracts',
        'add' => 'Add contract',
        'attribute' => [
            'user_name' => 'First and last name',
            'start_date' => 'Start date',
            'end_date' => 'End date',
            'client' => 'Client',
            'carnet' => 'Carnet',
        ],
        'form' => [
            'title' => 'Basic info'
        ]
    ],
    'buttons' => [
        'save' => 'Save',
        'cancel' => 'Cancel'
    ]
];