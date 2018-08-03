<?php

chdir(__DIR__);
define('SRC', realpath(__DIR__ . '/../'));

include SRC . '/vendor/autoload.php';

$initContainer = include_once SRC . '/config/container.php';
$initRouter = include_once SRC . '/config/routes.php';
$appSettings = include_once SRC . '/config/application.php';

$app = new Slim\App($appSettings);

$initContainer($app->getContainer());
$initRouter($app);

$app->run();