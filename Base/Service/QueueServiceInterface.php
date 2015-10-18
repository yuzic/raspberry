<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 15.10.15
 * Time: 17:59
 */
namespace Base\Service;

interface QueueServiceInterface
{
    public function send($key, $message);
}