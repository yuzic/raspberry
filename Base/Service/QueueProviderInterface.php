<?php
namespace Base\Service;
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 18.10.15
 * Time: 21:59
 */

interface QueueProviderInterface
{
    public function send($key, $message);
}

