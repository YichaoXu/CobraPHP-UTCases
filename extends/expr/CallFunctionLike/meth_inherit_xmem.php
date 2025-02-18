<?php

class ParentClass
{
    function __construct()
    {
        echo "Parent Construct.\n";
    }

    function overrideMethod($data)
    {
        echo "overrideMethod\n";
    }

    function inheritMethod($data)
    {
        echo "inheritMethod\n" . $data;
    }
}

class TestClass extends ParentClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    function overrideMethod($data)
    {
        parent::overrideMethod("secure");
        echo "overrideMethod\n" . $data;
    }
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

(new TestClass())->overrideMethod($vul_data);
(new TestClass())->overrideMethod($sec_data);

(new TestClass())->inheritMethod($vul_data);
(new TestClass())->inheritMethod($sec_data);
