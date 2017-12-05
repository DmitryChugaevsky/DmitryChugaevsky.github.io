<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 03.12.2017
 * Time: 20:37
 */
require 'Plus.php';

class PlusTest extends PHPUnit_Framework_TestCase
{
    private $Plus;

    protected function setUp()
    {
        $this->plus = new Plus();
    }

    protected function tearDown()
    {
        $this->plus = NULL;
    }

    public function testAdd()
    {
        $result = $this->plus->add(1, 2);
        $this->assertEquals(3, $result);
    }

}
