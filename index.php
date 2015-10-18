<?php
require "boostrap.php";

//require "di.php";
//
//interface iMail
//{
//    function send($email);
//}
//
//class Swifts implements iMail
//{
//
//    /**
//     * @param $email
//     * @return string
//     */
//    public function send($email)
//    {
//        return 'ok' . $email;
//    }
//
//}
//
//class Mailter
//{
//    private $mailer = null;
//
//    /**
//     * @param iMail $mailter
//     */
//    public function __construct(iMail $mailter)
//    {
//        $this->mailer = $mailter;
//    }
//
//
//    public function send($email)
//    {
//        return $this->mailer->send($email);
//    }
//
//}
//
//$container = new \Di\ContainerDi();
//
///**  @var Mailter $container  */
//$container->mailer = function($c) {
//    $swift  = new Swifts();
//
//    return new Mailter($swift);
//};
//
//
//echo $container->mailer->send('wdw');