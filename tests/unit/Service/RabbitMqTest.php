<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 18.10.15
 * Time: 21:49
 */
class RabbitMqTest extends PHPUnit_Framework_TestCase
{
    public function testSend()
    {
        $rabbitMq = new Base\Service\Amqp\RabbitMq([]);

        $queueService  = new  Base\Service\QueueService($rabbitMq);

        $this->assertNull($queueService->send('key', 'message'));
    }
}
