<?php

namespace Di;

class Container
{
    protected $container = [];

    public function __construct()
    {

    }

    public function __set($key, $value)
    {
        $this->container[$key] = $value;
    }

    public function __get($value)
    {
        return $this->container[$value]($this);
    }

}