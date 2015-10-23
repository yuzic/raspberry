<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 23.10.15
 * Time: 9:26
 */

abstract class UnitAbstract extends PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        require "boostrap.php";
    }
}