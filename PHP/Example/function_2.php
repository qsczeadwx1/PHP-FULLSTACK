<?php

// 함수명   : fnc_sum
// 기능     : 파라미터를 더한 값을 리턴
// 파라미터 : INT $param_a
//          : INT $param_b
// 리턴 값  : INT $sum

function fnc_sum($param_a, $param_b)
{
    $sum = $param_a + $param_b;
    return $sum;
}

echo fnc_sum(10, 2);

// 가변파라미터
function fnc_sum2( ...$param_numbers )
{
    $sum = 0;
    foreach ( $param_numbers as $val )
    {
        $sum += $val;
    }
    return $sum;
}
echo fnc_sum2(1,2,3,4,5,6,7);

// 가변파라미터2
function fnc_sum3()
{
    $args = func_get_args();
    $sum = 0;
    foreach ( $args as $val )
    {
        $sum += $val;
    }
    return $sum;
}

// 가변파라미터 3
echo fnc_sum3(10,22,25,29);

function fnc_sum4( ...$param_numbers )
{
    return array_sum($param_numbers);
}

echo fnc_sum4(1, 11, 2222, 33);

// 전역변수
function fnc_global()
{
    global $global_i;
    $global_i = 0;
}

$global_i = 5;
fnc_global();

echo "\n",$global_i;

function fnc_static()
{
    static $static_i = 0;
    echo $static_i;
    $static_i++;
}

fnc_static();
fnc_static();

function fnc_reference( &$param_str )
{
    $param_str = "fnc_reference";
}

$str = "aaa";
fnc_reference( $str );

echo $str;


function gugudan($dan, $num)
{
    for($i=2; $i<=$dan; $i++)
    {
        echo $i."단\n";
        for($ii=1; $ii<=$num; $ii++)
        {
            echo $i." * ".$ii." = ".$i*$ii."\n";
        }
        echo "\n";
    }
}
gugudan(9,9);

function print_star($star)
{
    for($i=0; $i < $star; $i++)
    {
        echo "*";
    }
    echo "\n";
}

print_star(1);
print_star(2);
print_star(3);
print_star(4);
print_star(5);

$height = 10;
for($i=0; $i < $height; $i++)
{
    print_star($i);
}



// function print_star_1($height)
// {
//     for($ii=0; $ii < $height; $ii++)
//     {
//         for($i=0; $i < $height; $i++)
//         {
//             echo "*";
//         }
//     echo "\n";
//     }
// }

// print_star_1(5);




?>