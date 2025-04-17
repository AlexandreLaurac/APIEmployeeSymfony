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

    #[Route(
        'employees/{id}',
        name:'get_employee_by_id',
        methods: ['GET']
    )]
    public function getEmployeeById(DataService $dataService, $id): JsonResponse {
        try {
            $employee = $dataService->getEmployeeById($id) ;
            return new JsonResponse($employee, JsonResponse::HTTP_OK) ;
        }
        catch (\Exception $e) {
            return new JsonResponse(['message' => $e->getMessage()], JsonResponse::HTTP_NOT_FOUND) ;
        }
    }
}


?>