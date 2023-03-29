<?php

// 문자열 합치기
$str_1 = "aaa";
$str_2 = "bbb";
$str_add = $str_1.$str_2;

echo $str_add, "\n";

// 대소문자 변환
$str_en = "aBcd eFgh";
// 소문자 변환
echo strtolower($str_en), "\n";
// 대문자 변환
echo strtoupper($str_en), "\n";

// 각 단어의 맨앞글자만 대문자 변환
echo ucwords($str_en), "\n";

// url 관련 함수
$url = "https://www.naver.com/";
$arr_url = parse_url($url);
var_dump($arr_url);

parse_str($arr_url["query"], $arr_parse);

var_dump($arr_parse);
?>