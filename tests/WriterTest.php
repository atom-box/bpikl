<?php

// use CORE\classes\WebAddress;
use PHPUnit\Framework\TestCase;
require_once '/home/evan/projects/tatll/core/classes/Writer.php';

class WriterTest extends TestCase
{
    public function testNothing(): void
    {
        $this->assertTrue(true);
    }


    public function testFileAppendsSomefile() {
        $testLine = date('Y-m-d H:i:s', time()) . "Bobby Bonilla\n";
        $handle = new Writer($testLine);
        $fileGrowth = $handle->appendLine($testLine);
        $this->assertGreaterThan(0, $fileGrowth);
    }

    public function testAppendsCorrectFile() {
        
    }

}
