<?php

class Container
{
    function echo_info($info)
    {
        echo "CONTAINER_INFO $info\n";
    }
}

$user_input = $_GET["user_input"];
$multiArr = array(array(1, 2), array("a", "b"));
$ref =& $multiArr[0][1];
$ref = new Container();
$multiArr[0][1]->echo_info($user_input);

