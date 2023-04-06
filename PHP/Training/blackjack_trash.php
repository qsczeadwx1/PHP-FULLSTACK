<?php

// 카드의 총합을 21로 만들거나 딜러보다 21에 가깝게 만들면 이기는게임 
// 카드는 조커를 제외한 52장으로 플레이
// J Q K는 10으로 계산하며, A는 1과 11 둘다 사용가능
// 시작시에 딜러와 플레이어는 각각 카드 두장을 받으며,
// 딜러는 받은 카드 하나만 공개
// 그 뒤 플레이어는 카드를 하나씩 뽑을 수 있고,
// 카드의 총합이 21이 되기 전까지 몇장이든 카드를 뽑는 것이 가능
// 다만 총합이 21을 넘기면 딜러의 총합과는 관계없이 패배
// 21이 되기전 플레이어는 카드를 더 이상 받지 않을 수 있고,
// 카드 받는 것을 멈췄을 때,
// 딜러는 처음 받은 카드 중 공개하지 않았던 카드를 공개하고
// 카드의 총합이 21혹은 플레이어가 STAND했을때의 합보다 높을때 까지 카드를 뽑음
// 하지만 딜러는 총합이 16이하일 경우엔 무조건 HIT,
// 17이상일 경우엔 무조건 STAND를 해야됨
// 처음 받은 두장의 카드의 합이 21일 경우엔 블랙잭으로, 바로 플레이어의 승


// 카드를 뽑는것 "HIT"
// 카드를 더 뽑지 않고 멈추는 것 "STAND"
// 카드의 총합이 21을 초과 "BUST"
// 시작시에 받은 카드 두장으로 21(A + 10,J,Q,K)이 완성되는 경우 "BLACK_JACK"







// 일단 어레이 카드를 넣고
// 셔플써서 랜덤 배열을 만들고
// 카운트가 처음엔 52에서 0번 카드를 뽑아주고
// 다음되면 51에서 1번카드
// ~~~~ 카운트가 1번 되면 51번카드를 마지막으로 뽑고
// 0되면 자동종료



// $player에 랜덤으로 뽑은 카드 값 넣기


// for($i = 0; $i < 2; $i++)
// {
//     $random = mt_rand(0,$total);
//     $arr = array_push($player, $deck[$random]);
//     array_splice($deck, array_search($deck[$random],$deck),1 );
//     --$total;
// }


$arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
$arr_shape = array( 0, 1, 2, 3 );
$deck = array();

foreach( $arr_shape as $shape )
{
    foreach( $arr_num as $num )
    {
        $deck[] = $num;
    }
}

$player = array();
$dealer = array();

$total = count($deck)-1;
$random = mt_rand(0,$total);
$arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
// $dealer에 랜덤으로 뽑은 카드 값 넣기

// for($i = 0; $i < 2; $i++)
// {
//     $random = mt_rand(0,$total);
//     $arr = array_push($player, $deck[$random]);
//     array_splice($deck, array_search($deck[$random],$deck),1 );
//     --$total;
// }


// for($i = 0; $i < 2; $i++)
// {
//     $random = mt_rand(0,$total);
//     $arr = array_push($player, $deck[$random]);
//     array_splice($deck, array_search($deck[$random],$deck),1 );
//     --$total;
// }


for($i = 0; $i < 2; $i++)
{
    $random = mt_rand(0,$total);
        if($deck[$random] == "A" )
        {
            $arr = array_push($player, "11");
            $arr_del;
            --$total;
        }
        else if($deck[$random] == "J" || "Q" || "K" )
        {
            $arr = array_push($player, "10");
            $arr_del;
            --$total;
        }
        else
        {
            $arr = array_push($player, $deck[$random]);
            $arr_del;
            --$total;
        }
}

for($i = 0; $i < 2; $i++)
{
    $random;
        if($deck[$random] == "A" )
        {
            $arr = array_push($dealer, "11");
            $arr_del;
            --$total;
        }
        else if($deck[$random] == "J" || "Q" || "K" )
        {
            $arr = array_push($dealer, "10");
            $arr_del;
            --$total;
        }
        else
        {
            $arr = array_push($dealer, $deck[$random]);
            $arr_del;
            --$total;
        }
}

var_dump($deck);
var_dump($player);
var_dump($dealer);



// $dealer_result = array_sum($dealer);




// print_r($deck);


// $total = count($deck)-1;

// function rand_num( $param_people )
// {
//     for($i = 0; $i < 52; $i++)
//     {
//         $random = mt_rand(0,$total);
//         array_push($param_people, $deck[$random]);
//         array_splice($deck, array_search($deck[$random],$deck),1 );
//     }
// }


// $rand_deck = array_rand($deck);
// print $deck[$rand_deck];



// 먼저 플레이어 2장, 딜러 2장뽑고
// 플레이어 합이 21이면 승

// 21이 아니면 플레이어는 카드를 한장씩뽑고
// 뽑았을때 21이 넘어간다면 패배
// 21이 넘어가지 않는다면 카드를 더 뽑을지, 그만 뽑을지 설정 가능

// 플레이어가 STAND를 선언하면,
// 딜러의 처음 뽑아놓았던 2장이 21이면 플레이어 패배

// 21이 아니라면 딜러는 카드를 뽑기 시작하고,
// 플레이어보다 카드의 합이 크다면 플레이어 패배
// 21이 넘어가게 된다면 플레이어 승리

// $deck = array( "A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"
//                 ,"A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"
//                 ,"A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"
//                 ,"A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"
//                 );