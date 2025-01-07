<?php

$db_config = [
    'dsn' => "mysql:host=127.0.0.1;dbname=intervolga_test;charset=utf8mb4",
    'username' => 'root',
    'password' => '',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];