<?php

chdir(__DIR__);
define('SRC', realpath(__DIR__ . '/../'));

include SRC . '/vendor/autoload.php';

$initContainer = include_once SRC . '/config/container.php';
$initRouter = include_once SRC . '/config/routes.php';

$app = new Slim\App();

$initContainer($app->getContainer());
$initRouter($app);

$app->run();