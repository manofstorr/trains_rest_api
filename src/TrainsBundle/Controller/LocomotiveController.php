<?php

namespace TrainsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use TrainsBundle\Entity\Locomotive;

class LocomotiveController extends Controller
{

    /**
     * @Route("/locomotives", name="locomotives_list")
     * @Method({"GET"})
     */
    public function getLocomotivesAction(Request $request)
    {
        return new JsonResponse([
            new Locomotive("1", "RKX-0733-D", "Diesel BB39"),
            new Locomotive("2", "RKX-0734-D", "Diesel BB39"),
            new Locomotive("3", "RCC-0098-E", "Electric ZE45"),
        ]);
    }

}