<?php

// min, max, floor, round, ceil, rand
echo floor(4.9)."\n";
echo round(4.9)."\n";
echo ceil(4.9)."\n";
echo min(array(3, 4, 5, 6, 7, 8, 9)). "\n";
echo max(array(3, 4, 5, 6, 7, 8, 9)). "\n";
echo rand(0, 2). "\n";

// 날짜 관련 함수
echo date('y-m-d H:i:s a')."\n";
echo date('y-m-d H:i:s')."\n";
echo date('y-m-d H:i:s')."\n";
echo date('ymdHis')."\n";

// 난수함수
echo mt_rand(0, 10)."\n";

// OS, PHP, GLOBALS 정보 함수, 변수 및 함수
// echo PHP_OS."\n";
// echo PHP_VERSION."\n";

// var_dump($GLOBALS);
// phpinfo();

// 상수선언(명명규칙: 상수명은 반드시 대문자로 작성)

$a=1;
define("INT_ONE", 1);

echo INT_ONE;



?>