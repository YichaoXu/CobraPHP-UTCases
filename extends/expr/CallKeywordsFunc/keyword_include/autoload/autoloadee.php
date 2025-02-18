<?php

class autoloadee
{

    function someFunc()
    {
        echo "file/someFunc\n";
    }
}


function autoloadee(): void
{
    echo "includee\n";
}