<?php

class Container
{
    public function echo_info($param)
    {
        echo "CONTAINER_INFO $param";
    }
}

$user_input = $_GET["user_input"];
$index_arr = array("", ...[new Container()]);
$index_arr[1]->echo_info($user_input);
