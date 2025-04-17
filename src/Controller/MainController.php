<?php

namespace App\Controller;

use App\Service\DataService ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\Routing\Attribute\Route ;
use Symfony\Component\HttpFoundation\JsonResponse ;


class MainController extends AbstractController {

    #[Route(
        '/employees',
        name:'get_all_employees',
        methods: ['GET']
    )]
    public function getEmployees(DataService $dataService): JsonResponse {
        $employees = $dataService->getEmployees() ;
        return new JsonResponse($employees, JsonResponse::HTTP_OK) ;
    }
}


?>