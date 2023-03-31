<?php

// 파일명 gugudan.txt
// 파일위치 : sam
// 내용
// 2단
// 2 * 1 = 2
// 2 * 2 = 4
// ...9단까지


$f_open = fopen("../Example/sam/gugudan.txt", "a");

// $dan = 9;
// $num = 9;
// for($i = 2; $i <= $dan; $i++)
// {
//     fputs($f_open, $i. "단"."\n");
//     for($ii = 1; $ii <= $num; $ii++)
//     {
//         fputs($f_open, $i. " * ". $ii. " = ".$i*$ii. "\n");
//     }
// }

// function gugu($dan, $num)
// {
//     $f_open = fopen("../Example/sam/gugudan.txt", "a");
//     for($i = 2; $i <= $dan; $i++)
//     {
//         fputs($f_open, $i. "단"."\n");
//         for($ii = 1; $ii <= $num; $ii++)
//         {
//             fputs($f_open, $i. " * ". $ii. " = ".$i*$ii. "\n");
//         }
//     }
//     fclose($f_open);
// }
// gugu(9,9);

function gugu_1($dan, $num)
{
    $f_open = fopen("../Example/sam/gugudan.txt", "a");
    $str = null;
    for($ii = 2; $ii <= $dan; $ii++)
    {
        $str .= $ii."단\n";
        for($i = 1; $i <= $num; $i++)
        {
                $str .= $ii." * ". $i. " = ". $ii*$i."\n";
        }
    }
    fputs($f_open, $str);
    fclose($f_open);
}

gugu_1(12,15);




/*
김밥
샌드위치
백반
국밥
크림우동
연어초밥
돈까스
돈까스1
돈까스2
돈까스3

국밥과 크림우동 사이에 스테이크를 추가해주세요.
*/

$f_food = fopen("../example/sam/food.txt", "a");

$arr_food = file("../example/sam/food.txt");

    foreach($arr_food as $val)
    {
        if(trim($val) === "국밥")
        {
            $print_food .= $val."스테이크\n";
       }
        else
        {
            $print_food .= $val;
        }
}
print $print_food;

fputs( $f_food, $print_food);
fclose($f_food);





?>