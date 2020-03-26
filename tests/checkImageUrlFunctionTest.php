<?php
require ('../checkImageUrlFunction.php');

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase

{
    public function testSuccesscheckImageUrl()
    {
        $expected= true;
        $case = checkEntries('dcdwcd','jendjendjwe',5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }
    
    public function testFailurecheckImageUrl()
    {
        $expected= false;
        $case = checkEntries('','kfmkfkfm', 5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }

    public function testMalformedcheckImageUrl()
    {
        $expected= false;
        $case = checkEntries('',5, 5,'vrvrvrv');
        $this->assertEquals($expected, $case);
    }
    
}