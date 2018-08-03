<?php

namespace App\Controller;

use App\Entity\Dto\SpecialistsFilter;
use App\Utils\Http\JsonResponseHelper;
use Doctrine\ORM\EntityRepository;
use Slim\Http\Request;
use Slim\Http\Response;
use Symfony\Component\Serializer\Serializer;

class SpecialistController
{
    private $_specialistRepository;

    private $_serializer;

    public function __construct(
        EntityRepository $specialistRepository,
        Serializer $serializer
    )
    {
        $this->_specialistRepository = $specialistRepository;
        $this->_serializer = $serializer;
    }

    public function getSpecialists(Request $request, Response $response, $args) 
    {
        $filter = $this->_serializer->denormalize($request->getParams(), SpecialistsFilter::class);
        $specialists = $this->_specialistRepository->findAll();

        return JsonResponseHelper::ok($response, $this->_serializer->normalize($specialists));
    }

    public function getSpecialist(Request $request, Response $response, $args)
    {
        $id = $args['id'];
        $specialist = $this->_specialistRepository->find($id);
        if ($specialist == null) {
            return JsonResponseHelper::notFound($response);
        }

        return JsonResponseHelper::ok($response, $this->_serializer->normalize($specialist));
    }
}