<?php

// 1.배열의 길이를 반환하는 my_len()함수를 작성
$arr_leng = array(1, 2, 3, 4, 5, 6, 7);

function my_len($arr_leng)
{
    $count = 0;
    foreach($arr_leng as $val)
    {
        $count++;
    }
    return $count;
}

$len = my_len($arr_leng);
echo $len;


?>