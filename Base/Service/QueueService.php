<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 15.10.15
 * Time: 17:58
 */
namespace Base\Service;

/**
 * Сервис очередей
 *
 * Class QueueService
 * @package Base\Service
 */
class QueueService implements QueueServiceInterface
{
    public $provider = null;

    /**
     * @param QueueProviderInterface $provider
     */
    public function __construct(QueueProviderInterface  $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Send message in Queue
     *
     * @param string $key - key from config
     * @param string $message - message for queue
     *
     * @return bool -
     */
    public function send($key, $message)
    {
        return $this->provider->send($key, $message);
    }
}
