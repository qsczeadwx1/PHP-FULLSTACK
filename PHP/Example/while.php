<?php
    // // 1. while문
    // $i = 0;
    // while( $i < 10 )
    // {
    //     // 반복하고 싶은 처리
    //     echo $i++;
    // }

    // $dan = 2;
    // $num = 1;
    // while( $num < 10)
    // {
    //     $result = $dan." * ".$num." = ".$dan * $num."\n";
    //     echo $result;
    //     $num++;
    // }

    
    // while($ii)
    // {
    //     $result = $iii." * ".$ii." = ".$iii * $ii."\n";
    //     echo $result;
    //     $ii++;
    //     if($ii > 30)
    //         break;
        
        
    // }

    // $dan = 2;
    // $num = 1;
    // while($num < 10)
    // {
    //     while($dan < 10)
    //     {

    //     $result = $dan." * ".$num." = ".$dan * $num."\n";
    //     echo $result;
    //     $num++;
    // }
    // }

    // $dan = 2;
    // $num = 1;
    // while($num < 10)
    // {
    //     while($dan < 10)
    //     {
    //     echo $dan * $num."\n";
    //     $num++;
    //     }
    // $dan++;
    // $num = 1;
    // }

    $dan = 2;
    $num = 1;
    $max_dan = 9;
    while($dan <= $max_dan)
    {
        echo $dan."단\n";
        while($num <= $max_dan)
        {
            $result = $dan * $num."\n";
            echo $dan." * ".$num." = ".$result;
            $num++;
        }
    $num = 1;
    $dan++;
    }

// num가 9가되면
// 출력을 멈추고
// dan이 늘어나고 num가 1이되어 다시 실행
// dan이 9가되면 종료

// 2.do while 문
    // do
    // {
    //     반복 할 처리
    // }
    // while( 조건 );

    // $i = 0;
    // do{
    //     echo $i, "do while";
    // }
    // while($i == 1);

    // while($i == 1)
    // {
    //     echo $i, "while";
    // }

// 3. for문
    for ($i=2; $i <= 9 ; $i++) 
    { 
        echo $i, "단\n";
        for ($num=1; $num <=9; $num++)
        {
            echo $i." * ".$num." = ".$i * $num."\n";
        }
    }

?>