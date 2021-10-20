<?php
include_once "../src/index.php";
use PHPUnit\Framework\TestCase;
class StringTest extends TestCase
{
    public function TestResult()
    {
        $result = check("s * (s – a) * (s – b) * (s – c)");
        $expected = " right format";
        $this->assertEquals($result,$expected);
}
}