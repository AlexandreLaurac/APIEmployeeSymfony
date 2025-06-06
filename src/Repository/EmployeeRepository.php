<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employee>
 */
class EmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    public function findAllInIdOrder() {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT e
             FROM App\Entity\Employee e
             ORDER BY e.id ASC'
            );
        return $query->getResult();
    }
}
