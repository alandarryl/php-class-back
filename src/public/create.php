<?php

require_once '../../bootstrap.php';

use App\service\UserService;

$newUser = [
    'firstName' => 'Jhon',
    'lastName' => 'Doe',
    'role' => 'admin'
];

$userService = new UserService();
$newInsertedUser = $userService ->createUser($newUser);

include_once "../template/userCreatePage.php";
