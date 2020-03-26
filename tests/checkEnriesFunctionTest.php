<?php
require ('../checkEntriesFunction.php');

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase

{
    public function testSuccessCheckEntries()
    {
        $expected= true;
        $_POST['brand'] = 'dcdwcd';
        $_POST['model']= 'jendjendjwe';
        $_POST['price']= 5;
        $_POST['materials']='vrvrvrv';
        $case = checkEntries();
        $this->assertEquals($expected, $case);
    }
    
    
    
    
    
    
    public function testFailurescore()
    {
        $deal1= 3;
        $deal2= 'A6';

        $this->expectException(TypeError::class);
        $case = score($deal1, $deal2);
    }
    public function testmalformedscore()
    {
        $deal1= [1, 2, 3, 4, 5];
        $deal2= false;
        $this->expectException(TypeError::class);
        $case = score($deal1, $deal2);
    }
}