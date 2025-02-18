<?php

class Container
{
    public function echo_info($info)
    {
        echo "CONTAINER_INFO $info\n";
    }
}

$user_input = $_GET["user_input"];
$index_arr = array("", new Container());
[$a_brace, $b_brace] = $index_arr;
$b_brace->echo_info("secure");

list($a_list, $b_list) = $index_arr;
$b_list->echo_info($user_input);
