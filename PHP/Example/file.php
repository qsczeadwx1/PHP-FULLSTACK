<?php

// 파일을 여는 방법 : fopen( 파일위치, 파일여는방식 )
// $f_food = fopen("./sam/food.txt", "r"); // r : 읽기전용
// $f_food = fopen("./sam/food.txt", "w"); // w : 쓰기전용(포인터가 파일 시작부분)
// $f_food = fopen("./sam/food.txt", "a"); // a : 쓰기전용(포인터가 파일의 끝부분)


// var_dump($f_food);

// 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일)
// echo fgets($f_food)

// $num = 6;
// for($i = 0; $i < $num; $i++)
// {
//     print fgets($f_food);
// }

// while(!feof($f_food))
// {
//     echo fgets($f_food);
// }



$f_food = fopen("./sam/food.txt", "a"); // a : 쓰기전용(포인터가 파일의 끝부분)

// 파일의 내용 추가 : fputs( open한 파일, 추가할 내용 )
fputs($f_food, "\n돈까스");
fputs($f_food, "\n돈까스2");
fputs($f_food, "\n돈까스3");

// 파일을 닫는 방법 : fclose( open한 파일 ), 꼭 열어서 파일쓰고난뒤 닫기
fclose($f_food);




?>