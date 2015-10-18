<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 15.10.15
 * Time: 17:58
 */
namespace Base\Service;

class QueueService implements QueueServiceInterface
{
    public $provider = null;

    public function __construct(QueueProviderInterface  $provider)
    {
        $this->provider = $provider;
    }

    public function send($key, $message)
    {
        return
    }
}
