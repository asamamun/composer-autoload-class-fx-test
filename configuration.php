<?php
function configuration(){
    return [
        'database' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'name' => 'test'
        ],
        'pagesize' => 10,
        'company' => [
            'name' => 'My Company',
            'address' => '123 Main Street',
            'city' => 'Anytown',
            'state' => 'CA',
            'zip' => '90210'
        ]
    ];

}