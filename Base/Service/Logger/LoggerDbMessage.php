<?php

namespace Base\Service\Logger;

use Base\Service\MessageService as Message;

class LoggerDbMessage implements LoggerMessageInterface
{
    public function add(Message $message)
    {
        return $message;
    }
}