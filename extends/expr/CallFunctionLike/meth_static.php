<?php

class TestClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    static function testMethod($data)
    {
        echo "testMethod\n" . $data;
    }
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

TestClass::testMethod($vul_data);
TestClass::testMethod($sec_data);
