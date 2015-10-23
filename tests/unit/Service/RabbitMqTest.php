<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 18.10.15
 * Time: 21:49
 */

class RabbitMqTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        require_once "boostrap.php";
    }

    public function testSend()
    {
        $configSet = [
           'host' => 'localhost',
           'post' => 5672,
           'login' => 'guest',
           'password'  => 'guest'
        ];

        $config = new Base\App\Configuration\ArrayConfig($configSet);

        $rabbitMq = new Base\Service\Amqp\RabbitMq($config);

        $queueService  = new  Base\Service\QueueService($rabbitMq);

        $this->assertNull($queueService->send('key', 'message'));
    }


    public function testMockRabbit()
    {
        $configSet = [
            'host' => 'localhost',
            'post' => 5672,
            'login' => 'guest',
            'password'  => 'guest'
        ];

        $config = new Base\App\Configuration\ArrayConfig($configSet);

        //$rabbitMq = new Base\Service\Amqp\RabbitMq($config);
        $rabbit  = $this->getMockBuilder('Base\Service\Amqp\RabbitMq')
            ->setConstructorArgs([$config])
            ->getMock();


        $rabbit->method('send')
            ->will($this->returnValue(null));

        $queueService  = new  Base\Service\QueueService($rabbit);

        $this->assertNull($queueService->send('key', 'message'));
    }
}
