<?php
namespace Base\Service;
use Base\Service\MessageService as Message;

interface NotifierInterface
{
    public function send(Message $message);

}

