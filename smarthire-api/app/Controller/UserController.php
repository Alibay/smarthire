<?php

namespace App\Controller;

use App\Utils\Http\JsonResponseHelper;
use Doctrine\ORM\EntityRepository;
use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
    private $_userRepository;

    public function __construct(EntityRepository $userRepository)
    {
        $this->_userRepository = $userRepository;
    }
}