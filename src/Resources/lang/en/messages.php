<?php
$singular_name = 'item';
$plural_name = 'items';

return [
    'success' => [
        'create' => $singular_name . ' successfully created',
        'update' => $singular_name . ' successfully updated ',
        'delete' => '{1} ' . $singular_name . ' successfully deleted|[2,*] ' . $plural_name . ' successfully deleted',
        'restore' => '{1} ' . $singular_name . ' successfully restored | [2,*] ' . $plural_name . ' successfully restored'
    ],
    'fail' => [
        'show'   => $singular_name . 'not found',
        'create' => 'An error occurred during ' . $singular_name . ' creation',
        'update' => 'An error occurred updating the ' . $singular_name,
        'delete' => 'An error occurred during deletion',
        'restore' => 'An error occurred during restoring'
    ]
];
