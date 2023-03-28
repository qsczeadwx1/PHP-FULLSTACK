<?php

// 두 매개변수의 차를 구하는 함수를 구현해 주세요

function fnc_add($add_a, $add_b)
{
    // $add_ab = $add_a - $add_b;

    // return $add_ab;
    return $add_a - $add_b;
}

// 두 매개변수를 나눈 함수를 구현

function fnc_div($div_c, $div_d)
{
    $div_cd = $div_c / $div_d;

    return $div_cd;
}

// 두 매개변수를 곱하는 함수를 구현

function fnc_tim($tim_e, $tim_f)
{
    $tim_ef = $tim_e * $tim_f;

    return $tim_ef;
}

// 각각의 값을 출력
echo fnc_add(3, 5)."\n";
echo fnc_div(6, 2)."\n";
echo fnc_tim(3, 4)."\n";

// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현

function fnc_args_sub()
{
    $args = func_get_args();
    $sub = null;
    foreach ($args as $val)
    {
        if($args[0] === $val)
        {
            $sub = $val;
        }
        else
        {
            $sub -= $val;
        }
    }
    return $sub;
}

echo fnc_args_sub(10, 2, 5)."\n";

function fnc_args_div()
{
    $args = func_get_args();
    $div = 0;
    foreach ($args as $val)
    {
        if($args[0] === $val)
        {
            $div = $val;
        }
        else
        {
            $div /= $val;
        }
    }
    return $div;
}

echo fnc_args_div(10, 2, 5)."\n";

function fnc_args_tim()
{
    $args = func_get_args();
    $tim = 0;
    foreach ($args as $val)
    {
        if($args[0] === $val)
        {
            $tim = $val;
        }
        else
        {
            $tim *= $val;
        }
    }
    return $tim;
}

echo fnc_args_tim(10, 2, 5)."\n";

// 위 처럼하면 두번째가 첫번째값과 같으면 값이 다르게 나옴
// 결과를 내는 값인 변수에 null, if에 is_null로 하던가,
// foreach안에 $key => $val로해서 if에 $key == 0으로

function rcc( $param_a )
{
    if($param_a === 1)
    {
        return 1;
    }
    return $param_a * rcc( $param_a - 1 );
}
echo "\n".rcc(5);

// *찍고 계행, 계행할수록 1개씩 더찍게




// 함수만든것들 *찍는 함수를 넣어서 새로만들기

function star( $height)
{
    $ii = 0;
    if($ii !== $height)
    {
        return str_repeat("*", $height)."\n".star($height - 1);
    }
}
echo star(7);

function star_add($star)
{
    echo str_repeat("*", $star);
}
star_add(5);


function star_2($height)
{
    $i = 0;
    $ii = 0;
    while($i < $height)
    {
        while($ii < $i+1)
        {
            echo "*";
            $ii++;
        }
        echo "\n";
        $i++;
        $ii = 0;
    }
}

star_2(5);

function star_3($height)
{
    $i = 0;
    $ii = 0;
    while($i < $height)
    {
        while($ii < $height)
        {
            echo "*";
            $ii++;
        }
    
    echo "\n";
    $i++;
    $ii = $i;
    }
}

star_3(5);

function star_4($height)
{
    $i = 0;
    $ii = 0;
    while($i < $height)
    {
        while($ii < $height)
        {
            echo "*";
            $ii++;
        }
    echo "\n";
    $i++;
    $ii=0;
    }
}

star_4(5);

?>

