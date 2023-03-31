<?php

// 1 45중 하나뽑고, 그거 빼고 44개중에 하나뽑고...
// 배열 끝에 요소추가 push()

// $result = array(0);

// function ran_num($num)
// {
//     $ran_num = mt_rand(1, 45);
//     array_push($result, $ran_num);
// }

// function lotte($num)
// {
//     for($i = 0; $i < $num; $i++)
//     {
//         ran_num($num);
//     }
//     return print_r($result);    
// }

// lotte(6);

// 1부터 45까지 있는 배열에서
// 배열을 섞어서 처음 값을 출력하고
// 다시 섞어서 출력 6번 반복
// 중간에 같은 값이면 출력하지 않고 다시

// $result = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17
//                 ,18 , 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31
//                 ,32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45);

$arr_num = array();
$ran_num = mt_rand(1, 45);


// function lottery()
// {
//     array_push($arr_num, $ran_num);
//     for($i=1; $i < 6; $i++)
//     {
//             for($ii=0; $ii<$i; $ii++)
//             {
//                 if()
//                 {
                    
//                 }
//                 $i--;
//             }
//     }
// }
?>