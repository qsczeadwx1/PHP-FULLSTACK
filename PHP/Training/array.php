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
            ,"치킨" => "닭");

echo $food1["햄버거"];
unset($food1["라면"]);
var_dump($food1);
?>