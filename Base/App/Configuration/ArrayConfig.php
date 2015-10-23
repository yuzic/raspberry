<?php
namespace Base\App\Configuration;


class ArrayConfig extends AbstractConfig implements ParametersInterface
{
    /**
     * Get data from storage
     * @param $key
     * @param null $default
     * @return null
     */
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }

        return $default;
    }

    /**
     * Set data to storage
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}