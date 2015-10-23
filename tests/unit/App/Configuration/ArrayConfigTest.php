<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 22.10.15
 * Time: 19:38
 */
class ArrayConfigTest extends  PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        require_once "boostrap.php";
    }

    /**
     * testing configuration
     *
     */
    public function testConfig()
    {
        $configSet = [
            'host' => 'localhost',
            'post' => 5672,
            'login' => 'guest',
            'password'  => 'guest'
        ];

        $config = new Base\App\Configuration\ArrayConfig($configSet);

        $this->assertEquals($configSet['login'], $config->get('login'));

    }

}