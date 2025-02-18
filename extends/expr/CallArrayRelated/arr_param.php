<?php

class SomeClass
{
    function some_method($info)
    {
        echo "some_method $info\n";
    }
}

function some_func($arr, $info)
{
    $arr[0]->some_method($info);
}

$user_input = $_GET["user_input"];
$some_var = array(new SomeClass());
some_func($some_var, $user_input);
