<?php

// use CORE\classes\WebAddress;
use PHPUnit\Framework\TestCase;
require_once '/home/evan/projects/tatll/core/classes/WebAddress.php';

class LongUrlTest extends TestCase
{
    public function test(): void
    {
        $this->assertTrue(true);
    }


    public function testMakesALink() {
        $testurl = 'https://example.com/' 
        . '/' . (string) random_int(100000, 999999)
        . '/' . (string) random_int(100000, 999999);
        $wA = new WebAddress($testurl);
        $this->assertIsString($wA->getLong());
        $wA->shortify();
        $this->assertLessThan(25, strlen($wA->getShort()));
    }
}
