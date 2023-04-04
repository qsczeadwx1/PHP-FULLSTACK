<?php

// while + if 조합
$i = 0;
while( $i <= 4 )
{
    if( $i === 1 )
    {
        echo "1입니다.\n";
    }
    else if( $i === 4 )
    {
        echo "4입니다.\n";
    }
    $i++;
}

// foreach + if 조합
$arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
foreach( $arr_ass as $key => $val)
{
    if( $key === "c" || $val === 2 )
    {
        echo "if";
    }
}
echo "\n";
// 이중루프

$dan = 9;
$num = 9;
for($i=2; $i<=$dan; $i++)
{
    echo $i."단\n";
    for($ii=1; $ii<=$num; $ii++)
    {
        echo $i." * ".$ii." = ".$i*$ii."\n";
    }
    echo "\n";
}

// 1-100 숫자 중에 짝수의 합을 구해주세요

$array = array();
    for($i=0; $i<101; $i++)
    {
        if($i % 2 === 0)
        {
            array_push($array, $i);
        }
    }
echo array_sum($array);

$sum = 0;
for($i=0; $i<101; $i++)
{
    if($i % 2 === 0)
    {
        $sum += $i;
    }
}
echo $sum;

?>