<?php
namespace Base\Service\Amqp;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * Class connection to  RabbitMq
 *
 */
class RabbitMq implements \Base\Service\QueueProviderInterface
{
    public $channel = null;

    public function __construct($config)
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $this->channel = $connection->channel();

    }

    /**
     * Send message
     * @param $key
     * @param $message
     */
    public function send($key, $message)
    {
        $msg = new AMQPMessage($message);

        return $this->channel->basic_publish($msg, '', $key);
    }
}
