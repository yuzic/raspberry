<?php
namespace Base\App\Configuration;

interface ParametersInterface
{
    public function get($key, $default =  null);

    public function set($key, $value);
}