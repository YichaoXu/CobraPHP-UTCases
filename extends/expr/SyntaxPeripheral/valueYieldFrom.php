<?php

function yieldFromData(): Generator
{
    yield from array("user-input" => $_GET["user-input"]);
}

foreach(yieldFromData() as $key => $value) {
    echo "key is: $key";
    echo "value is: $value";
}
