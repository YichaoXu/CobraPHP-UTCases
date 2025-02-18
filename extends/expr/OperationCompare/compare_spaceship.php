<?php

function test_case_0()
{
    echo "Statement gives 0\n";
}

function test_case_1()
{
    echo "Statement gives 1\n";
}

// function test_case_-1() { echo "Statement gives -1\n"; }

// Integers
$bool = (1 <=> 1); // 0
$action = 'test_case_' . $bool;
$action();
$bool = -(1 <=> 2); // -1
$action = 'test_case_' . $bool;
$action();
$bool = (2 <=> 1); // 1
$action = 'test_case_' . $bool;
$action();

// Floats
$bool = (1.5 <=> 1.5); // 0
$action = 'test_case_' . $bool;
$action();
$bool = -(1.5 <=> 2.5); // -1
$action = 'test_case_' . $bool;
$action();
$bool = (2.5 <=> 1.5); // 1
$action = 'test_case_' . $bool;
$action();

// Strings
$bool = ("a" <=> "a"); // 0
$action = 'test_case_' . $bool;
$action();

$bool = -("a" <=> "b"); // -1
$action = 'test_case_' . $bool;
$action();

$bool = ("b" <=> "a"); // 1
$action = 'test_case_' . $bool;
$action();

$bool = -("a" <=> "aa"); // -1
$action = 'test_case_' . $bool;
$action();

$bool = ("zz" <=> "aa"); // 1
$action = 'test_case_' . $bool;
$action();

// Arrays
$bool = ([] <=> []); // 0
$action = 'test_case_' . $bool;
$action();

$bool = ([1, 2, 3] <=> [1, 2, 3]); // 0
$action = 'test_case_' . $bool;
$action();

$bool = ([1, 2, 3] <=> []); // 1
$action = 'test_case_' . $bool;
$action();

$bool = ([1, 2, 3] <=> [1, 2, 1]); // 1
$action = 'test_case_' . $bool;
$action();

$bool = -([1, 2, 3] <=> [1, 2, 4]); // -1
$action = 'test_case_' . $bool;
$action();

// Objects
$a = (object)["a" => "b"];
$b = (object)["a" => "b"];
$bool = ($a <=> $b); // 0
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "b"];
$b = (object)["a" => "c"];
$bool = -($a <=> $b); // -1
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "c"];
$b = (object)["a" => "b"];
$bool = ($a <=> $b); // 1
$action = 'test_case_' . $bool;
$action();

$a = (object)["a" => "b"];
$b = (object)["b" => "b"];
$bool = ($a <=> $b); // 1
$action = 'test_case_' . $bool;
$action();

// Boolean and Integer, convert to bool then compare
$bool = (true <=> 2); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (2 <=> true); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (2 <=> false); // 1
$action = 'test_case_' . $bool;
$action();

$bool = -(false <=> 2); // -1
$action = 'test_case_' . $bool;
$action();

// Float and Integer, convert to bool then compare
$bool = -(1.0 <=> 2); // -1
$action = 'test_case_' . $bool;
$action();

$bool = (2.0 <=> 2); // 0
$action = 'test_case_' . $bool;
$action();

$bool = (2.2 <=> 2); // 1
$action = 'test_case_' . $bool;
$action();

?>


