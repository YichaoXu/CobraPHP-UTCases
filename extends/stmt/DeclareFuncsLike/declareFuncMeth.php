<?php

function outerClassDef(): void
{
    class InnerClass
    {
        function callee1($data): void
        {
            echo "data: $data \n";
        }

        function callee2($data): void
        {
            echo "data: $data \n";
        }
    }
}

outerClassDef();

$obj = new InnerClass();

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$obj -> callee1($vul_data);
$obj -> callee2($sec_data);

