<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 30.10.15
 * Time: 16:02
 */

class NotifierLoggerTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        require_once "boostrap.php";
    }

    public function testNotiferSender()
    {
        $loggerDb = new Base\Service\Logger\LoggerDbMessage();

        $notifierLogger = new Base\Service\NotifierLogger($loggerDb);

        $message = new Base\Service\MessageService('+79218963260','test sms');
        $notifierLogger->send($message);
    }
}