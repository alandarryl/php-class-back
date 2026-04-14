<?php

require_once './bootstrap.php';

use App\service\UserService;

$newUser = [
    'firstName' => 'Jhon',
    'lastName' => 'Doe',
    'role' => 'admin'
];

$userService = new UserService();
$userService ->createUser($newUser);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page create</h1>
</body>
</html>