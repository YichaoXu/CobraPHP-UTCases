<?php

class Container
{
    function echo_info($info)
    {
        echo "CONTAINER_INFO $info\n";
    }
}

$user_input = $_GET["user_input"];
$multiArr = array(array(1, new Container()), array("a", "b"));
$multiArr[0][1]->echo_info($user_input);

