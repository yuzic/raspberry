<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 14.10.15
 * Time: 12:41
 */
namespace Base\App;

/**
 * Class App
 * @package Base\App
 */
class App
{
    /**
     * Инициализируем автозагрузку
     *
     * @param $class_name
     */
    public static function __autoload($class_name) {
        $parts = explode('\\', $class_name);

        require implode('/' ,$parts) . '.php';
    }

}

spl_autoload_register(array('\Base\App\App', '__autoload'));