<?php
    print "안녕하세요.\n";
    print ("안녕하세요. 괄호입니다.\n");

    echo "안녕하세요. 에코입니다.\n";

    var_dump( print "안녕하세요." );

    $test_num = '변수변수';

    echo $test_num;

    // 변수에는 대문자 소문자 숫자 특수문자 "_"만 나올수 있고,
    // 숫자는 변수를 표시하는 $의 젤앞에는 나올 수 없음

    // 네이밍 기법
        // 1. 카멜 기법 : 단어의 첫글자는 대문자, 나머지는 소문자로 작성하는 기법
        //     예) $TestNum
        // 2. 스네이크 기법 : 단어와 단어 사이를 "_"로 이어주고 전부 소문자로 작성하는 기법
        //     예) $test_num

    
?>