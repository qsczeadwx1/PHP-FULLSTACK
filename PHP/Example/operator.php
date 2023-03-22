<?php
    // 1. 산술연산자

    echo "더하기 : 1 + 1 = ", 1 + 1;
    echo "\n뺴기 : 1 - 1 = ", 1 - 1;
    echo "\n곱하기 : 2 * 3 = ", 2 * 3;
    echo "\n나누기 : 10 / 2 = ", 10 / 2;
    echo "\n나머지 : 9 % 7 = ", 9 % 7;

    echo "\n연산순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    echo "\n";
    // 2. 증가/감소 연산자
    $num1 = 1;
    $num2 = 1;

    echo ++$num1, "\n";
    echo ++$num1, "\n";

    echo --$num1, "\n";
    echo --$num1, "\n";

    echo $num1++, "\n";
    echo $num1++, "\n";

    // 3. 산술 대입 연산자
    $num1 = 1;
    $num1 = $num1 +1;

    $num2 = $num2 +1;
    $num2 += 1;

    $num2 = $num2 -1;
    $num2 -= 1;

    $num2 = $num2 *1;
    $num2 *= 1;

    $num2 = $num2 /1;
    $num2 /= 1;

    $num2 = $num2 %1;
    $num2 %= 1;

    // 4. 비교 연산자
    $t1 = 1 > 2;
    $t2 = 1 < 2;
    $t3 = 1;
    $t4 = '1';
    var_dump($t1);
    var_dump($t2);

    var_dump (1==='1');
    var_dump (1=='1');

    var_dump($t1 != $t2);
    var_dump($t1 !== $t2);

    // 5. 논리 연산자

    //and
    var_dump(1===1 && 2 == 2);
    var_dump(1===1 && 3 == 2);

    //or
    var_dump(1===1 || 3 == 2);
    var_dump(1===2 || 3 == 2);

    //not
    var_dump(!(1==1));
    
    // 변할수 있는 값
    // 5
    // 123
    // echo 1024 + 64;
    // echo 1024 - 64;
    // echo 1024 * 64;
    // echo 1024 / 64;

    // 변수 i를 

    echo 8 >> 2;

?>