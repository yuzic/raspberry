<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 30.10.15
 * Time: 10:28
 */

class SmsTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        require_once "boostrap.php";
    }

    /**
     * Тестирует sms сервис
     */
    public function testSms()
    {
        $configSet = [
            'login' => 'login',
            'password' => 'password',
        ];

        $config = new Base\App\Configuration\ArrayConfig($configSet);

        $message = new Base\Service\MessageService('+79218963260','test sms');

        $sms  = $this->getMockBuilder('Base\Service\Sms\Smsc')
            ->setConstructorArgs([$config])
            ->getMock();


        $sms->method('send')
            ->will($this->returnValue(12));


        $id = $sms->send($message);
        $this->assertNotEmpty($id);
    }

}