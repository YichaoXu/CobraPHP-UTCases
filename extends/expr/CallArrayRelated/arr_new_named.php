<?php

class Container
{
    public function echo_info($info)
    {
        echo "CONTAINER_INFO $info\n";
    }
}

$user_input = $_GET["user_input"];
$index_arr = array("a" => new Container(), "b" => "");
$index_arr["a"]->echo_info("secure");
$index_arr["b"] = new Container();
$index_arr["b"]->echo_info($user_input);
