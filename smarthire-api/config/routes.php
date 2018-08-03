<?php

use App\Controller\SpecialistController;
use App\Middleware\CorsMiddleware;

return function ($app) {
    $container = $app->getContainer();

    $app->group('/api/v1', function () use($container) {

        $this->get('/specialists', SpecialistController::class . ':getSpecialists');
        $this->get('/specialists/{id}', SpecialistController::class . ':getSpecialist');

    })->add(CorsMiddleware::class);
};