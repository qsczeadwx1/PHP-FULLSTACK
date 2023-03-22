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
$score = 60;
$text_1 = "당신의 점수는 ";
$text_2 = "점 입니다. ";
$rank = "<등급>";


if($score > 100 || $score < 0)
{
$rank = "잘못된 값을 입력 했습니다.";
echo $rank;
}
else{
if($score === 100){
    $rank = "<A+>";
}
else if($score >= 90){
    $rank = "<A>";
}
else if($score >= 80){
    $rank = "<B>";
}
else if ($score >= 70){
    $rank = "<C>";
}
else if ($score >= 60){
    $rank = "<D>";
}
else{
    $rank = "<F>";
}
echo $text_1.$score.$text_2.$rank;
}

?>