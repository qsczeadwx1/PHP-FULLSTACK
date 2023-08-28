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
// $url = "https://www.naver.com/";
// $arr_url = parse_url($url);
// var_dump($arr_url);

// parse_str($arr_url["query"], $arr_parse);

// var_dump($arr_parse);

// 역순의 문자열
$str_abcd = "abcd";
echo strrev($str_abcd);

// 문자열 자르기 - 파라미터안에 변수, 자르기 시작할 위치, 자를 길이 순으로 작성
$str_1 = "가나다라마";
echo substr($str_1,3,6), "\n"; // 바이트 단위로 써야함
echo mb_substr($str_1,1,2), "\n"; // 글자단위
echo mb_substr($str_1, -1), "\n"; // 첫번째 숫자에 음수를주면 뒤에서부터

// 문자열 자르기로 "PHP입니다."만 출력
$str_tng = "안녕하세요. PHP입니다.";
echo mb_substr($str_tng, 7, 7), "\n";
echo mb_substr($str_tng, -7, 7), "\n";
echo substr($str_tng, 17, 13), "\n";
// 문자열 자르기로 "세요. P"만 출력해 주세요;
echo mb_substr($str_tng, 3, 5), "\n";
echo mb_substr($str_tng, -11, 5), "\n";
// 문자열 자르기 함수로 만들어보기








// 문자열 빈공간 지우기
$str_trim = "       abcd        ";
echo trim($str_trim), "\n";

echo rtrim($str_trim), "\n";
echo ltrim($str_trim), "\n";

// 문자열의 길이를 구하는 함수
$str_len= "abcd가나다라";

echo strlen($str_len), "\n";
echo mb_strlen($str_len), "\n";

// 문자열 포맷에 따라 출력하는 함수
define("WELCOME", "안녕하세요. %s님.");
printf(WELCOME, "홍길동");
printf("안녕하세요. %s입니다. %d", "PHP", 1234);

// 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
// 에러 번호 : 에러 종류
//  1 : 시스템
//  2 : 로그인
//  3 : 접속

$err_num = "%d";
$err_type = "%s";

define("ERROR", "ERROR($err_num) : $err_type ERROR가 발생했습니다.");
echo "\n";
printf(ERROR,"1", "시스템");
echo "\n";
printf(ERROR,"2", "로그인");
echo "\n";
printf(ERROR,"3", "접속");


function err($err_num)
{
    if($err_num == 1)
    {
        printf(ERROR,"1", "시스템");
    }
    else if($err_num == 2)
    {
        printf(ERROR,"2", "로그인");
    }
    else if($err_num == 3)
    {
        printf(ERROR,"3", "접속");
    }
    
}

echo "\n", err(2), "\n";

//  문자열을 분리하는 함수
$str_sscanf = "가나다라 50 abcd";
sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

// 문자열을 반복해서 찍어주는 함수
echo str_repeat("가나", 5);

// 문자열을 특정문자열로 분리하는 함수 explode()
$str_expl = "홍길동,27세,남자,의적,조선";
$arr_expl = explode(",", $str_expl);

print_r($arr_expl);

// 배열을 특정 문자열로 합치는 함수 : implode()
$str_impl = implode(" : ", $arr_expl);

echo $str_impl."\n";

$num = 3.14213213123;

printf("정수형식= %d, 실수형식= %0.10f", $num, $num);



?>