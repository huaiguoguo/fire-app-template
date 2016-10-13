<?php

defined('DEBUG') or define('DEBUG', true);
defined('ENV') or define('ENV', 'dev');

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/huaiguoguo/fire/framework/Fire.php';
require __DIR__ . '/../config/bootstrap.php';

$config      = require __DIR__ . '/../config/main.php';
$application = new Fire\web\Application($config);
$application->run();
