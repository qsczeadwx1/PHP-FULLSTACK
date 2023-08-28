<?php

// call by value
function fnc_val($int_a, $int_b)
{
    $int_a = 3;
    $int_b = 4;

}

$int_a = 1;
$int_b = 2;
fnc_val(5, 6);

echo $int_a, " ", $int_b;



function fnc_val_1(&$a, &$b)
{
    $a = 3;
    $b = 4;

}

$int_a = 1;
$int_b = 2;
fnc_val_1($int_a, $int_b);

echo $int_a, " ", $int_b."\n";

function A()
{
    global $n;

    $n = "A";
    $m = "A";

    echo $n, $m."\n";
}

$n = "B";
$m = "B";

echo $n, $m."\n";
A();
echo $n, $m."\n";

function S()
{
    global $a;
    echo $a."\n";
}

function D()
{
    $a = "A";
    S();
}

$a = "B";
S();
D();

?>