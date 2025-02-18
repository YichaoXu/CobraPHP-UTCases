<?php

class Container
{
    public function echo_info($info)
    {
        echo "CONTAINER_INFO $info\n";
    }
}

$user_input = $_GET["user_input"];
$index_arr = array(new Container(), "");
$index_arr[0]->echo_info("secure");
$index_arr[1] = new Container();
$index_arr[1]->echo_info($user_input);
