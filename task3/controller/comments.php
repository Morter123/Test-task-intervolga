<?php

// $db = new PDO($dsn, $username, $password, $options);

// $stmt = $db->prepare($query);

// $stmt = $db->exec($params);

$fillable = ['nickname', 'text'];

check($fillable);

$rules = [
    'nickname' => [
        'required' => 'true',
        'min' => 3,
        'max' => 20,
    ],
    'text' => [
        'required' => 'true',
        'min' => 1,
        'max' => 1000,
    ]
];

