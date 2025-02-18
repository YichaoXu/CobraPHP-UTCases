<?php

class Createe
{
    function action($data)
    {
        echo "ACTION\n" . $data;
    }
}

class Creator
{

    function linked($data): void
    {
        $this->createe()->action($data);
    }

    function action($data): void
    {
        $createe = $this->createe();
        $createe->action($data);
    }

    function createe(): Createe
    {
        return new Createe();
    }
}


$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$creator = new Creator();

$creator->action($vul_data);
$creator->action($sec_data);

$creator->linked($vul_data);
$creator->linked($sec_data);
