<?php
    $b = $_GET["p2"];
    if($b){
        $file = "a.php";
    }else{
        $file = "b.php"; 
    }
    include($file);