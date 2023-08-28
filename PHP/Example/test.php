<?php

$year = 2032;

if (($year % 400) == 0 || ($year % 4) == 0 && ($year % 100) != 0) {
    echo $year . " 년은 윤년임";
} else {
    echo $year . " 년은 윤년아님";
}


$years = [2012, 198, 120, 12201, 1234, 1543, 12456, 9234, 2045, 2082, 2400];

foreach ($years as $val) {
    if (($val % 400) == 0 || ($val % 4) == 0 && ($val % 100) != 0) {
        echo $val . " 년은 윤년임\n";
    } else {
        echo $val . " 년은 윤년아님\n";
    }
}

$i = 0;
$j = 0;
    while($j < 5)
    {
        while($i <= $j) {
            echo "*";
            $i++;
        }
        echo "\n";
        $i = 0;
        $j++;
    }


?>