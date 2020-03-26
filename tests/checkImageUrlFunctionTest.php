<?php
require '../checkImageUrlFunction.php';

use PHPUnit\Framework\TestCase;

class checkImageUrltest extends TestCase

{
    public function testSuccesscheckImageUrl()
    {
        $expected= true;
        $image = trim(htmlspecialchars('https://cdn.shopify.com/s/files/1/0066/8817/8212/products/Box-and-Contents-Pink-Background_540x.jpg?v=1583769069'));
        $case = filter_var($image, FILTER_VALIDATE_URL);
        if($case !=false) {
            $case = true;
        } 
        $this->assertEquals($expected, $case);
    }
        public function testFailurecheckImageUrl()
    {
        $expected= false;
        $image = trim(htmlspecialchars(''));
        $image = filter_var($image, FILTER_VALIDATE_URL);
        $case= $image;
        $this->assertEquals($expected, $case);
    }
    public function testMalformedcheckImageUrl()
    {
        $expected= false;
        $image = trim(htmlspecialchars('hello'));
        $image = filter_var($image, FILTER_VALIDATE_URL);
        $case = $image;
        $this->assertEquals($expected, $case);
    }
}