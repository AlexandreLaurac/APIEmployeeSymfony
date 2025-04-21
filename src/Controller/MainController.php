<?php

namespace App\Controller;

use App\Entity\Employee ;
use App\Repository\EmployeeRepository ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\Routing\Attribute\Route ;
use Symfony\Component\Serializer\SerializerInterface ;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Component\HttpFoundation\Response ;
use Doctrine\ORM\EntityManagerInterface ;


class MainController extends AbstractController {

    // GET /employees
    #[Route(
        '/employees',
        name:'get_all_employees',
        methods: ['GET']
    )]
    public function getEmployees(SerializerInterface $serializer, EmployeeRepository $er): Response {
        $employees = $er->findAllInIdOrder() ;
        $json = $serializer->serialize($employees, 'json') ;
        return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
    }

    // GET /employees/id
    #[Route(
        'employees/{id}',
        name:'get_employee_by_id',
        methods: ['GET']
    )]
    public function getEmployeeById(SerializerInterface $serializer, EmployeeRepository $er, int $id): Response {
        $employee = $er->find($id) ;
        if ($employee) {
            $json = $serializer->serialize($employee, 'json') ;
            return new Response($json, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
        }
        else {
            return new Response('{ "message":"unexisting data" }', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application/json']) ;
        }
    }

    // PUT /employees/id
    #[Route(
        'employees/{id}',
        name:'update_employee',
        methods: ['PUT']
    )]
    public function updateEmployee(Request $request, EntityManagerInterface $em, SerializerInterface $serializer, int $id): Response {
        // Format check (must be json)
        if ($request->getContentTypeFormat() !== 'json') {
            return new Response('{ "message":"wrong content-type" }', Response::HTTP_BAD_REQUEST, ['Content-Type' => 'application/json']) ;
        }

        // Getting employee with id supplied
        $currentEmployee = $em->getRepository(Employee::class)->find($id) ;

        // Data existence check
        if (!$currentEmployee) {
            return new Response('{ "message":"unexisting data" }', Response::HTTP_NOT_FOUND, ['Content-Type' => 'application/json']) ;
        }

        // Modifying current employee with data supplied
        $reqJson = $request->getContent() ;
        $reqEmployee = $serializer->deserialize($reqJson, Employee::class, 'json') ;
        if ($reqEmployee->getFirstName()) {
            $currentEmployee->setFirstName($reqEmployee->getFirstName()) ;
        }
        if ($reqEmployee->getLastName()) {
            $currentEmployee->setLastName($reqEmployee->getLastName()) ;
        }
        if ($reqEmployee->getCity()) {
            $currentEmployee->setCity($reqEmployee->getCity()) ;
        }
        if ($reqEmployee->getCountry()) {
            $currentEmployee->setCountry($reqEmployee->getCountry()) ;
        }
        if ($reqEmployee->getCountryCode()) {
            $currentEmployee->setCountryCode($reqEmployee->getCountryCode()) ;
        }
        if ($reqEmployee->getBirthDate()) {
            $currentEmployee->setBirthDate($reqEmployee->getBirthDate()) ;
        }
        $em->flush() ;

        // Response
        $respJson = $serializer->serialize($currentEmployee, 'json') ;
        return new Response($respJson, Response::HTTP_OK, ['Content-Type' => 'application/json']) ;
    }
}


?>