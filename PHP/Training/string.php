<?php
// "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램 작성

// $hello = "I am always Hello.";
// $hello_expl = explode(" ", $hello);
// $hello_expl[3] = "Happy.";
// $hello_impl = implode(" ", $hello_expl);

// echo $hello_impl;

// 함수명 : my_str_replace
// 리턴값 : String $result_str
// $hello = "I am always Hello";
// function my_str_replace($hello)
// {
//     $hello_expl = explode("Hello", $hello);
//     $result_str = implode("Happy", $hello_expl);
//     return $result_str;
// }

// echo my_str_replace($hello);


// 재사용성 개선
$hello = "I am always Hello";
function my_str_replace($param_str, $param_separator, $param_ch)
{
    $hello_expl = explode($param_separator, $hello);
    $result_str = implode($param_ch, $hello_expl);
    return $result_str;
}

echo my_str_replace($hello, "am", "Apple");

echo str_replace("Hello", "Happy", $hello);

?>