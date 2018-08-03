<?php

use App\Controller\SpecialistController;
use Doctrine\ORM\EntityManager;

return function ($container) {

    $container[EntityManager::class] = function ($container) {
        EntityManager::create([], []);
    };

    $container[SpecialistController::class] = function ($container) {
        return new SpecialistController();
    };
};