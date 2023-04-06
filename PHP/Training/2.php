<?php

// 카드의 총합을 21로 만들거나 딜러보다 21에 가깝게 만들면 이기는게임 
// 1. 게임 시작시 유저와 딜러는 카드를 2개 받는다
//     1.1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
// 2. 카드 합이 21을 초과하면 패배
//     2.1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
// 3. 카드의 계산은 아래의 규칙을 따른다
//     3.1. 카드 2~9는 그 숫자대로 점수
//     3.2. K.Q.J.10은 10점
//     3.3. A는 1점 또는 11점 둘 중의 하나로 계산은
// 4. 카드의 합이 같으면 다음의 규칙에 따름
//     4.1. 카드 수가 적은 쪽이 승리
//     4.2. 카드 수가 같을 경우 비김
// 5. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
//     5.1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
//     5.2. 17 이상일 경우는 받지 않는다.
// 6. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
// 한번 사용한 카드는 다시 쓸 수 없음
// 동시에 21을 넘게되면 유저패배

// 배열로 카드뭉치를 설정하고
// 플레이어와 딜러는 카드 빈배열로 설정
// 카드뭉치의 배열에서 랜덤으로 카드를 뽑고,
// 그 랜덤으로 뽑은 카드는 카드뭉치 배열에서 지우고
// 플레이어와 딜러의 배열에 추가
// 두 배열의 합을 비교해서 합이 더 큰 사람이 승리


// 처음에 플레이어 먼저 두장 뽑고 J Q K는 10점으로 치환
// A는 ....
// 두개의 합을 내고 21인지 체크 

// 다음 딜러가 두장 뽑고 J Q K는 10점으로 치환
// A는 .....
// 두개의 합을 내고 21인지 체크

// 서로 21일 때 수가 같으면 비김

// 아니면 유저는 카드를 더뽑을지 카드를 비교할지 선택
// 유저가 카드를 받기로 선택했을 때
// 딜러 카드합이 17이 넘지 않으면 유저 혼자 카드를 뽑고
// 아니라면 딜러도 같이 카드를 뽑음
// 다시 합이 21인지 또는 21을 넘어갔는지 체크

// 유저의 카드합이 21이 넘지않았다면 위과정을 반복

// 유저가 카드 비교를 눌렀을 때,
// 쓴 카드는 그대로 버리고 게임 재진행,
// 게임 재진행을 눌렀을 땐 유저와 딜러의 배열도 비워서 시작해야됨

// 그렇게 카드를 모두 소진하거나,
// 그만두기를 누르면 게임종료



// blackjack 클래스 안에서 카드를 한장 뽑아서 그것을 배열에서 지우는거 까지 만들고
// 플레이어 클래스 에서 그 함수를 가져와서 뽑은 카드를 플레이어 배열에 추가
// 딜러도 똑같이


// $arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
// $arr_shape = array("♠", "♣", "◆", "♥");
// $arr_deck = null;

// foreach( $arr_shape as $shape )
// {
//     foreach( $arr_num as $num )
//     {
//         $arr_deck[] = $shape.$num;
//     }
// }

$arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
$arr_shape = array( 0, 1, 2, 3 );
$arr_deck = null;

foreach( $arr_shape as $shape )
{
    foreach( $arr_num as $num )
    {
        $arr_deck[] = $num;
    }
}


$player = array();
$dealer = array();

// 플레이어 카드뽑기
$total = count($arr_deck)-1;
$random = mt_rand(0,$total);

function draw_card()
{
    
}

$arr = array_push($player, $arr_deck[$random]);
array_splice($arr_deck, array_search($arr_deck[$random],$arr_deck),1 );
--$total;
$arr = array_push($player, $arr_deck[$random]);
array_splice($arr_deck, array_search($arr_deck[$random],$arr_deck),1 );
--$total;

// 딜러 카드뽑기

$arr = array_push($dealer, $arr_deck[$random]);
array_splice($arr_deck, array_search($arr_deck[$random],$arr_deck),1 );
--$total;
$arr = array_push($dealer, $arr_deck[$random]);
array_splice($arr_deck, array_search($arr_deck[$random],$arr_deck),1 );
--$total;

