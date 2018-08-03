<?php

namespace App\Controller;

use App\Utils\Http\JsonResponseHelper;
use Doctrine\ORM\EntityRepository;
use Slim\Http\Request;
use Slim\Http\Response;

class SpecialistController
{
    private $_specialistRepository;

    public function __construct(EntityRepository $specialistRepository)
    {
        $this->_specialistRepository = $specialistRepository;
    }

    public function home(Request $request, Response $response, $args)
    {
        return JsonResponseHelper::ok($response, []);
    }
    
    public function getSpecialists(Request $request, Response $response, $args) 
    {
        $specialists = $this->_specialistRepository->findAll();;
        return JsonResponseHelper::ok($response, $specialists);
    }

    public function getSpecialist(Request $request, Response $response, $args)
    {
        $id = intval($args[0]);
        $specialist = ['id'=>$id];//$this->_specialistRepository->find($id);

        return JsonResponseHelper::ok($response, $specialist);
    }
}