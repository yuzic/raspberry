<?php
// DI

$container = new \Base\App\Container;

$container->userService  = function($c) {
    return new Base\Service\UserService();
};

/**
 * Устанавливаем QueueService
 * @param $c
 * @return \Base\Service\QueueService
 */
$container->queueService = function($c) {
    $configSet = [
        'host' => 'localhost',
        'post' => 5672,
        'login' => 'guest',
        'password'  => 'guest'
    ];

    $config = new Base\App\Configuration\ArrayConfig($configSet);

    $rabbitMq = new Base\Service\Amqp\RabbitMq($config);

    return  new  Base\Service\QueueService($rabbitMq);
};

/** @var Base\Controller\UserController $container->userController */
$container->userController = function($c) {
    return new \Base\Controller\UserController($c->userService, $c->queueService);
};




//$controller  = new \Base\Controller\UserController($container->userService);










