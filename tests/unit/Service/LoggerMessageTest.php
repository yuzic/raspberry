<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 30.10.15
 * Time: 16:18
 */

class LoggerMessageTest extends PHPUnit_Framework_TestCase
{
    public function testLogMessage()
    {
        $logger  = new Base\Service\LoggerMessage();

        $this->assertTrue($logger->logMessage());
    }
}