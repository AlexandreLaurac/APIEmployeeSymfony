<?php

namespace App\Controller;

use App\Repository\EmployeeRepository ;
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
    public function getEmployees(SerializerInterface $serializer, EmployeeRepository $er): Response {
        $employees = $er->findAll() ;
        $json = $serializer->serialize($employees, 'json') ;
        return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
    }

    #[Route(
        'employees/{id}',
        name:'get_employee_by_id',
        methods: ['GET']
    )]
    public function getEmployeeById(SerializerInterface $serializer, EmployeeRepository $er, $id): Response {
        $employee = $er->find($id) ;
        if ($employee) {
            $json = $serializer->serialize($employee, 'json') ;
            return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
        }
        else {
            return new Response('{ "message":"unexisting data" }', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application/json']) ;
        }
    }
}


?>