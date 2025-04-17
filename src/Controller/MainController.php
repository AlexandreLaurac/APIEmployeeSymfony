<?php

namespace App\Controller;

use App\Service\DataService ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\Routing\Attribute\Route ;
use Symfony\Component\Serializer\SerializerInterface ;
use Symfony\Component\HttpFoundation\Response ;


class MainController extends AbstractController {

    #[Route(
        '/employees',
        name:'get_all_employees',
        methods: ['GET']
    )]
    public function getEmployees(DataService $dataService, SerializerInterface $serializer): Response {
        $employees = $dataService->getEmployees() ;
        $json = $serializer->serialize($employees, 'json') ;
        return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
    }
}


?>