<?php

namespace App\service;
require_once './bootstrap.php';
use App\Entity\User;

class UserService
{
    public function createUser($newUser){
        global $entityManager;
        $userRepo = $entityManager->getRepository(User::class);
        $userRepo -> createUser($newUser);
    }
}

