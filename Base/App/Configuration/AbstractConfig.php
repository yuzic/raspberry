<?php
namespace Base\App\Configuration;

abstract class  AbstractConfig
{
    public $storage = null;

    public function __construct($config)
    {
        $this->storage  = $config;
    }
}