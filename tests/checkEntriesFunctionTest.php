<?php
require '../checkEntriesFunction.php';

use PHPUnit\Framework\TestCase;

class checkEntriesTest extends TestCase

{
    public function testSuccessCheckEntries()
    {
        $expected= true;
        $case = checkEntries('dcdwcd','jendjendjwe',5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }
    
    public function testFailureCheckEntries()
    {
        $expected= false;
        $case = checkEntries('','kfmkfkfm', 5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }

    public function testMalformedCheckEntries()
    {
        $expected= false;
        $case = checkEntries('',5, 5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }
    
}