<?php
//
// 성적
// 범위 : 
//     100 A+
//     90~99 A
//     80~90 B
//     70~80 C
//     60~70 D
//     60미만 F

// 출력 문구 : "당신의 점수는 XXX점입니다. <등급>"
// 0~100 입력 받았을 때, 출력문구가 나오고
// 그외의 값일 경우 "잘못된 값을 입력 했습니다."라고 출력해 주세요.

$score = -120;
$text_1 = "당신의 점수는 ";
$text_2 = "점 입니다. ";

switch ($score) {
    case $score > 100 || $score < 0 :
        echo "잘못된 값을 입력 했습니다.";
        break;
    case $score === 100 :
        echo $text_1.$score.$text_2."<A+>";
        break;
    case $score === 90 :
        echo $text_1.$score.$text_2."<A>";
        break;
    case $score === 80 :
        echo $text_1.$score.$text_2."<B>";
        break;
    case $score === 70 :
        echo $text_1.$score.$text_2."<C>";
        break;
    case $score === 60 :
        echo $text_1.$score.$text_2."<D>";
        break;
    default:
        echo $text_1.$score.$text_2."<F>";
        break;
}

?>