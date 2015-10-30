<?php
namespace Base\Service\Logger;

use Base\Service\MessageService as Message;

interface LoggerMessageInterface
{
    public function add(Message $message);
}