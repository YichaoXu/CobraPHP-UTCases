<?php

class ErrorThrow extends Exception {

    public string $prop;

    function __construct($data) {
        Parent::__construct($data);
        $this->prop = $data;
    }
}

try {
    $vul_data = $_GET["user-input"];
    echo false ? $vul_data : throw new ErrorThrow($vul_data);
} catch (ErrorThrow $th) {
    echo $th->prop;
}
