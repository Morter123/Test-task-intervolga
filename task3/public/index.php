<?php 

use core\Router;
use classes\Db;

require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

require_once CONFIG . '/func.php';
$router = new Router;
require_once CONFIG . '/routes.php';
require_once CONFIG . '/db.php';


$db = Db::getInstance();
$db->getConnection($db_config);

$router->start();