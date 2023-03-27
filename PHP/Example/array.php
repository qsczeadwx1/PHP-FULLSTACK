<?php
    $num = 10;
    $num = 11;

    $week = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
    print $week[0];

    $sun = "Sun";
    $mon = "Mon";
    $tue = "Tue";
    $wed = "Wed";
    $week2 = array($week[0], $week[1], $week[2], $week[3]);

    echo $week2[3];

    // Mon, Wed, Sun, Tue 순서로 week2를 변경

    $week2 = array($week[1], $week[3], $week[0], $week[2]);

    echo $week2[0].", ".$week2[1]."\n";

    // 멀티타입 배열
    $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // var_dump($arr_mult_type);

    // 연상 배열
    $arr_ass = array("key1" => "val1"
                    ,"key2" => "val2");
    echo $arr_ass["key1"]."\n";

    // 다차원 배열
    $arr_temp = array(array(1, 2, 3, 4)
                    ,array(5, 6, 7, 8)
                    ,array(
                        array(9, 10, 11)
                        ,array(12, 13, 14)
                    )
                    ,array(15, 16, 17, 18)
                );
    // echo $arr_temp[0][1];
    // echo $arr_temp[1][3];
    echo $arr_temp[2][1][1];
    echo $arr_temp[3][1];
    $arr_temp_1 = $arr_temp[2];
    $arr_temp_1_c = array(
                    array(9, 10, 11)
                    ,array(12, 13, 14)
                    );
    var_dump($arr_temp_1);

    // 배열의 원소 삭제
    $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    unset($arr_week[3]);
    print_r($arr_week);

    // array_diif() 
    $arr_diff_1 = array("a", "b", "c");
    $arr_diff_2 = array("a", "b", "d");

    $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    print_r($arr_diff);

    // 배열의 정렬 : asort(), arsort(), ksort(), krsort();
    // asort();
    $arr_asort = array("b", "a", "d", "c");
    asort($arr_asort);
    print_r($arr_asort);
    // arsort();
    $arr_arsort = array("b", "a", "d", "c");
    arsort($arr_arsort);
    print_r($arr_arsort);

    // ksort();
    $arr_ksort = array("key1" => "val1"
                    ,"key3" => "val3"
                    ,"key2" => "val2"
                    ,"key4" => "val4"
                );
    ksort($arr_ksort);
    print_r($arr_ksort);

    // krsort();
    $arr_krsort = array("key1" => "val1"
                    ,"key3" => "val3"
                    ,"key2" => "val2"
                    ,"key4" => "val4"
                );
krsort($arr_krsort);
print_r($arr_krsort);

// array의 사이즈를 반환하는 함수 : count
    echo count($arr_krsort)."\n";

// foreach( $array as $key => $val ){}
// foreach( $array as $val ){}
$arr1 = array("key1" => "val1"
                    ,"key3" => "val3"
                    ,"key2" => "val2"
                    ,"key4" => "val4"
);
    foreach( $arr1 as $key => $val )
    {
        echo $key." : ".$val."\n";
    }
krsort($arr1);
    foreach( $arr1 as $a => $b )
    {
        echo $a.$b."\n";
    }
?>