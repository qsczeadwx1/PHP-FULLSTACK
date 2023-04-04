<?php
$arr_test =
array(
    1
    ,2
    ,array(
        "info_a" => 3
        ,"info_b" => 4
        ,"info_c" => 
        array(
            "f_1" => 5
            ,"f_2" => 7
            )
        )
    );

// echo $arr_test["info"]["info_a"],"\n",$arr_test["info"]["info_c"]["f_2"];

echo $arr_test[2]["info_c"]["f_1"];



?>