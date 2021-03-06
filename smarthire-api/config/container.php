<?php

use App\Controller\SpecialistController;
use App\Middleware\CorsMiddleware;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Smarthire\Config\Config;
use Smarthire\Security\BCryptPasswordEncoder;
use Smarthire\Security\PasswordEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

return function ($container) {

    $container[PasswordEncoder::class] = function ($container) {
        return new BCryptPasswordEncoder();
    };

    $container[Config::class] = function ($container) {
        $config = include_once SRC . '/config/config.php';
        return new Config($config);
    };

    $container[EntityManager::class] = function ($container) {
        $config = $container->get(Config::class);
        $conn = $config->get('db.doctrine.connection');
        $doctrineConfig = Setup::createAnnotationMetadataConfiguration([SRC], true);
        return EntityManager::create($conn, $doctrineConfig);
    };

    $container[Serializer::class] = function ($container) {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        return new Serializer($normalizers, $encoders);
    };

    // region middleware

    $container[CorsMiddleware::class] = function ($container) {
        $config = $container->get(Config::class);
        return new CorsMiddleware($config->get('http.cors'));
    };


    // endregion

    // region controllers

    $container[SpecialistController::class] = function ($container) {
        $entityManager = $container->get(EntityManager::class);
        $specialistRepository = $entityManager->getRepository(\App\Entity\Specialist::class);
        $serializer = $container->get(Serializer::class);
        
        return new SpecialistController($specialistRepository, $serializer);
    };

    // endregion
};;die;