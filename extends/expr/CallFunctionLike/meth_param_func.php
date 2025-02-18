<?php

class Param
{
    function __construct($prop = "")
    {
        $this->prop = $prop;
    }

    function method($data): void
    {
        echo "outer meth\n" . $data . $this->prop;
    }
}

function some_func($param, $data): void
{
    $param->method($data);              // line 3
}

function some_func2(Param $param, $data): void
{
    $param->method($data);              // line 7
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

(new Param($vul_data))->method("");
(new Param($sec_data))->method("");

some_func(new Param(), $vul_data); // line 2
some_func(new Param(), $sec_data); // line 2

some_func2(new Param(), $vul_data); // line 2
some_func2(new Param(), $sec_data); // line 2

