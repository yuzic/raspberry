<?php
namespace Base\App\Configuration;

abstract class AbstractConfig
{
    protected $storage = [];

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->storage = $config;
    }
}
