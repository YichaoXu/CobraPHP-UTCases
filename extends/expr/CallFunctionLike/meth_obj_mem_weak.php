<?php

class Test
{
    function callee()
    {
        $this->caller1();
        $this->caller2();
    }

    function caller1()
    {
        $this->callee();
    }

    function caller2()
    {
        $this->callee();
    }
}