<?php

namespace App\Controller;

use App\Utils\Http\JsonResponseHelper;
use Doctrine\ORM\EntityRepository;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController
{
    private $_userRepository;

    public function __construct(EntityRepository $userRepository)
    {
        $this->_userRepository = $userRepository;
    }

    public function signIn(Request $request, Response $response)
    {
        return JsonResponseHelper::ok($response);
    }

    public function signUp(Request $request, Response $response)
    {
        return JsonResponseHelper::ok($response);
    }

    public function forgotPassword(Request $request, Response $response)
    {
        return JsonResponseHelper::ok($response);
    }
}