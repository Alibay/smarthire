<?php


use App\Controller\SpecialistController;

return function ($app) {
    $app->get('/specialists', SpecialistController::class . 'getAll');
    $app->get('/specialists/{id}', SpecialistController::class . 'getById');
};