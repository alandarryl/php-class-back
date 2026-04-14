<?php 

namespace App\Repository;


use App\Entity\User;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function createUser($newUser){
        $user = new User();
        $user-> setFirstNAme($newUser['firstName']);
        $user ->setLastName($newUser['lasName']);
        $user ->setRole($newUser['role']);

        $this ->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }
}

