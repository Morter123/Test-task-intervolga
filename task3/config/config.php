<?php

// Основная папка проекта
define('ROOT', dirname(__DIR__));

// const для 2-го уровня папок
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CONFIG', ROOT . '/config');
define('CORE', ROOT . '/core');

// уровень папок APP
define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');