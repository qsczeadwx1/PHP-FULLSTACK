<?php

// function
function fnc_add($int_a, $int_b)
{
    $ab = $int_a + $int_b;

    return $ab;
}

// fnc_add 함수를 호출
$result_add = fnc_add(3, 5);
echo $result_add;

// 변수 a와 변수 b를 더한후 출력
$a = 1;
$b = 2;
$ab = $a + $b;

echo $ab;

// 가변 파라미터 함수
function fnc_args_add()
{
    
    $args = func_get_args();    // 가변 파라미터 습득
    $sum = 0; // 더하기 결과 저장 변수
    
    // 루프 : 더하기 실행
    foreach($args as $val)
    {
        $sum += $val;
    }
    return $sum;
}

echo fnc_args_add(10, 23, 37, 49);

// 재귀함수
function rcc( $param_a )
{
    if($param_a === 1)
    {
        return 1;
    }
    return $param_a * rcc( $param_a - 1 );
}
echo "\n".rcc(5);


// 전역함수

function fnc_add_2()
{
    global $global_int_a; // 전역변수 선언
   $global_int_a = $global_int_a + 10;

    return $global_int_a;
}

// $global_int_a = 5; 전역변수 초기화(값 대입)

echo fnc_add_2();

// 정적 변수
function fnc_add_3()
{
    static $i = 1;
    echo $i."\n";
    $i++;
}

for($i = 0; $i < 3; $i++)
{
    fnc_add_3();
}
?>