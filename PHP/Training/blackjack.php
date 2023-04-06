<?php

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";


// $random = mt_rand(0,$total);
// $arr = array_push($player, $deck[$random]);
// array_splice($deck, array_search($deck[$random],$deck),1 );
// --$total;


class Blackjack
{
	private $arr_num;
	private $arr_shape;
	private $arr_deck;
	private $player = array();
	private $dealer = array();
	private $player_score = array();
	private $dealer_score = array();
	private $num = 0;

	// construct
	public function __construct()
	{
		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$this->arr_shape = array("♠", "♣", "◆", "♥");
		$this->set_deck();
		$this->deck_shuffle();
	}

	// set
	private function set_deck()
	{
		// 카드 52장 덱에 셋팅
		foreach( $this->arr_shape as $shape )
		{
			foreach( $this->arr_num as $num )
			{
				$this->arr_deck[] = $shape.$num;
			}
		}
	}

// 덱 섞음
	public function deck_shuffle()
	{
		shuffle($this->arr_deck);
	}

// 카드뽑음
	public function draw_card()
	{
		$card = $this->arr_deck[$this->num];
		$this->num++;
		return $card;
	}


	public function add_player_card()
	{
		array_push($this->player, $this->draw_card());
	}

	public function add_player_score_conv()
	{
		$score = intval($this->player);
	}


	public function add_player_score()
	{
		array_push($this->player_score, $this->player[0]); // 
	}


	public function add_dealer_card()
	{
		array_push($this->dealer, $this->draw_card());
	}

	public function add_dealer_score()
	{
		
	}
	
	public function add_1()
	{
		var_dump($this->player);
	}

	public function add_2()
	{
		var_dump($this->dealer);
	}

	public function add()
	{
		var_dump($this->arr_deck);
	}

	public function add_3()
	{
		var_dump($this->player_score);
	}

	// $player = array();
	// $dealer = array();
	// $player_score = array();
	// $dealer_score = array();
	

}


$obj_blackjack = new Blackjack;

$obj_blackjack->add_player_card();
$obj_blackjack->add_player_score();
$obj_blackjack->add_3();
$obj_blackjack->add_player_card();

$obj_blackjack->add_dealer_card();
$obj_blackjack->add_dealer_card();

// foreach( $obj_blackjack->player_score as $val )
// {
// 	if()
// }




// 셔플써서 배열먼저 가져오고
// 0번부터 배열을 하나씩 뽑음, 지우지는 않고
// 카드를 하나씩 뽑고
// 플레이어가 받은 카드 배열과
// 플레이어가 받은 카드를 점수로 치환한 배열을 따로 만듬
// 카드 배열로 뽑은 카드를 나나태고 %2 $a, 치환한 배열을 array sum으로 합계점수를 계산


// 처음 함수를 호출하면 섞인 덱이 나오고
// 카드뽑기 함수를 써서
// 배열에서 카드를 하나뽑아오고
// 그 뽑아온 카드를 함수를 써서 플레이어 덱에 넣어주고
// 딜러도 똑같이
// ------------------------------------------------
// J Q K을 포함한 배열은 10점으로 치환하고
// 나머지 숫자 그대로 치환
// A의 경우에는
// 일단 A를 전부 1점으로 설정을 해놓고
// A가 하나라도 있을때 총합계가 11점 이하라면
// 총합계에서 10점을 더해주도록 만들기



// if써서 전부 일단 인트로 치환해서 넣어주고
// array_sum써서 더하는데
// 1이 하나라도 있을 경우 && 총합계가 11점이하일때
// 총합계에서 10점을 더해주도록....


?>
