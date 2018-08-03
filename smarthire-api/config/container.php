<?php

use App\Controller\SpecialistController;
use Doctrine\ORM\EntityManager;
use Smarthire\Security\BCryptPasswordEncoder;
use Smarthire\Security\PasswordEncoder;

return function ($container) {

    $container[PasswordEncoder::class] = function ($container) {
        return new BCryptPasswordEncoder();
    };

    $container[EntityManager::class] = function ($container) {
        EntityManager::create([], []);
    };

    $container[SpecialistController::class] = function ($container) {
        return new SpecialistController();
    };
};