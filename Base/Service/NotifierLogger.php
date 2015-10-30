<?php
namespace Base\Service;
use Base\Service\Logger\LoggerDbMessage;
use Base\Service\Logger\LoggerMessageInterface;
use Base\Service\MessageService as Message;

class NotifierLogger implements NotifierInterface
{
    public $notifier = null;
    public $logger = null;

    /**
     * @param \Base\Service\NotifierInterface $notifier
     * @param LoggerMessageInterface $logger
     */
    public function __constrict(NotifierInterface $notifier, LoggerMessageInterface $logger)
    {
        $this->notifier = $notifier;
        $this->logger = $logger;
    }

    public function send(Message $message)
    {
        $this->logger->add($message);
        $this->notifier->add($message);
    }
}

