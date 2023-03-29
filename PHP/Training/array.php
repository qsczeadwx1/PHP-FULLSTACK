<?php
// 음식종류 5개 이상을 배열로

$food = array("Hamburger", "ramen", "pizza", "chicken", "sandwich");
print $food[0];

// array $food에서 무작위로 값을 출력

$rand_food = mt_rand(0,4);
print $food[$rand_food];

// 키는 요리명, 값은 주재료 하나로 이루어진 배열 4개
$food1 = array("햄버거" => "패티"
            ,"라면" => "면"
            ,"피자" => "치즈"
            ,"치킨" => "닭"
        );

echo $food1["햄버거"];
unset($food1["라면"]);
var_dump($food1);

// foreach문을 이용해서 키가 "삭제"인 요소를 제거해주세요
$food2 = array("햄버거" => "패티"
            ,"라면" => "면"
            ,"삭제" => "값값"
            ,"피자" => "치즈"
            ,"치킨" => "닭"
        );

    foreach( $food2 as $key => $val)
    {
        if($key !== "삭제")
        {
            echo $key." : ".$val."\n";
        }
        else
        {
            unset($food2[$key]);
        }
    }
var_dump($food2);


// 버블정렬
// 배열안의 수가 큰쪽이 오른쪽으로 정렬되도록 정렬
// 배열안에서 오른쪽에 있는 수가 바로 왼쪽의수보다 큰것이 전부 참이면 종료

// while 문
$arr = array(5, 10, 7, 3, 1);

$i = 1;
$ii = 1;
$count_arr = count($arr);
while($ii < $count_arr)
{
    while($i < $count_arr)
    {
        if($arr[$i-1] > $arr[$i])
        {
            $temp = $arr[$i-1];
            $arr[$i-1] = $arr[$i];
            $arr[$i] = $temp;        
        }
        $i++;
    }
    $i=1;
    $ii++;
}

print_r($arr);


// for문
$arr_2 = array(5, 10, 7, 3, 1);
$count_arr_2 = (count($arr_2));

for($i=1; $i < $count_arr_2; $i++) 
{
    for($ii=1; $ii < $count_arr_2; $ii++)
    {
        if($arr_2[$ii-1] > $arr_2[$ii])
        {
            $temp = $arr_2[$ii-1];
            $arr_2[$ii-1] = $arr_2[$ii];
            $arr_2[$ii] = $temp;        
        }
    }
}

print_r($arr_2);


?>