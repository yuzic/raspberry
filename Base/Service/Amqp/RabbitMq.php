<?php
namespace Base\Service\Amqp;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Base\App\Configuration\ParametersInterface;

/**
 * Class connection to  RabbitMq
 *
 */
class RabbitMq implements \Base\Service\QueueProviderInterface
{
    public $channel = null;

    public function __construct(ParametersInterface $config)
    {
        $connection = new AMQPStreamConnection(
            $config->get('host'), $config->get('post'), $config->get('login'), $config->get('password')
        );
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
