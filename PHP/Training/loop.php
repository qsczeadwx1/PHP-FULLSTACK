<?php
// 1. 반복문 이용해서 아래와 같이 출력.
// *
// **
// ***
// ****
// *****
// $star = "*";
// $i = 1;
// $ii = $i - 1;
// while($i <= 5)
// {
//     $ii++;
//     while($ii = $i)
//     {
//         echo $star;
//         $ii++;
//     }
//     echo $star."\n";
//     $i++;
// }

// $num = 10;
// for ($i = 0; $i < $num ; $i++)
// {
//     for($ii = 0; $ii < $i-1; $ii++)
//     {
//     echo "*";
//     }
// echo "\n";
// }

// 1씩늘어나는 별
$num = 12;
$i = 0;
$ii = 0;
while($i < $num)
{
    while($ii < $i+1)
    {
        echo "*";
        $ii++;
    }
    echo "\n";
    $i++;
    $ii = 0;
}

// 1씩 줄어드는 별
$num = 11;
$i = 0;
$ii = 0;
while($i < $num)
{
    while($ii < $num)
    {
        echo "*";
        $ii++;
    }
    echo "\n";
    $i++;
    $ii=$i;
}

// 트리 
// 공백 10칸들어가면 별1개
// 9칸 들어가면 별 3개
// 8칸 들어가면 5개
// 계행을 젤상위
// 별찍는게 2번째
// 공백 3번째

$num = 10;
$i = 0;
$ii = 0;
$iii = 0;

while($i < $num)
{
    while($ii <= 3*$i)
    {
        while($iii <= $num - 1)
        {
            echo " ";
            $iii++;
        }
        echo "*";
        $ii++;
    }
    $i++;
    $ii = $i;
    $iii = $ii;
    echo"\n";
   

}



// i값의 -1만큼 찍고
// ii가 i의 -1임, 
// 마지막에 *하나 더찍고 계행


// 변수가 1늘어나서
// * 두개찍히고 5번째에서 종료

?>


