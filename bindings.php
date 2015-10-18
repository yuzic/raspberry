<?php
// DI

$container = new \Base\App\Container;

$container->userService  = function($c) {
    return new Base\Service\UserService();
};

$container->userController = function($c) {
    return new \Base\Controller\UserController($c->userService);
};

//$controller  = new \Base\Controller\UserController($container->userService);
$container->userController->actionRun();









