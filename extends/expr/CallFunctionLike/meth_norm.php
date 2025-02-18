<?php

class TestClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    function testMethod($data)
    {
        echo "testMethod\n" . $data;
    }
}


$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$testVariable = new TestClass();
$testVariable->testMethod($vul_data);
$testVariable->testMethod($sec_data);
