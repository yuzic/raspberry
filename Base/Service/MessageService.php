<?php

namespace Base\Service;


class MessageService
{
    public $to = null;

    public $body = null;

    public function __construct($to, $body)
    {
        $this->to =$to;
        $this->body = $body;
    }
}