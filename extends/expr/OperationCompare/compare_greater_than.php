<?php

function test_case_0()
{
    echo "Statement gives 0\n";
}

function test_case_1()
{
    echo "Statement gives 1\n";
}

// Integers
$bool = (int)(1 > 1); // 0
$action = 'test_case_' . $bool;
$action();
$bool = (int)(1 > 2); // 0
$action = 'test_case_' . $bool;
$action();
$bool = (int)(2 > 1); // 1
$action = 'test_case_' . $bool;
$action();

// Floats
$bool = (int)(1.5 > 1.5); // 0
$action = 'test_case_' . $bool;
$action();
$bool = (int)(1.5 > 2.5); // 0
$action = 'test_case_' . $bool;
$action();
$bool = (int)(2.5 > 1.5); // 1
$action = 'test_case_' . $bool;
$action();

// Strings
$bool = (int)("a" > "a"); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)("a" > "b"); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)("b" > "a"); // 1
$action = 'test_case_' . $bool;
$action();

$bool = (int)("a" > "aa"); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)("zz" > "aa"); // 1
$action = 'test_case_' . $bool;
$action();

// Arrays
$bool = (int)([] > []); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)([1, 2, 3] > [1, 2, 3]); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)([1, 2, 3] > []); // 1
$action = 'test_case_' . $bool;
$action();

$bool = (int)([1, 2, 3] > [1, 2, 1]); // 1
$action = 'test_case_' . $bool;
$action();

$bool = (int)([1, 2, 3] > [1, 2, 4]); // 0
$action = 'test_case_' . $bool;
$action();

// Objects
$a = (object)["a" => "b"];
$b = (object)["a" => "b"];
$bool = (int)($a > $b); // 0
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "b"];
$b = (object)["a" => "c"];
$bool = (int)($a > $b); // 0
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "c"];
$b = (object)["a" => "b"];
$bool = (int)($a > $b); // 1
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "b"];
$b = (object)["b" => "b"];
$bool = (int)($a > $b); // 0
$action = 'test_case_' . $bool;
$action();

// Boolean and Integer, convert to bool then compare
$bool = (int)(true > 2); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)(2 > true); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)(2 > false); // 1
$action = 'test_case_' . $bool;
$action();

$bool = (int)(false > 2); // 0
$action = 'test_case_' . $bool;
$action();

// Float and Integer, convert to bool then compare
$bool = (int)(1.0 > 2); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)(2.0 > 2); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (int)(2.2 > 2); // 1
$action = 'test_case_' . $bool;
$action();
