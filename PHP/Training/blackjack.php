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
	private $num_2 = 0;
	private $p_sum_score;
	private $d_sum_score;

	// construct
	public function __construct()
	{
		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$this->arr_shape = array("0", "1", "2", "3");
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
				$this->arr_deck[] = $num;
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


// 뽑은카드 player 배열에 하나씩 추가
	public function add_player_card()
	{
		array_push($this->player, $this->draw_card());
	}

// player가 뽑은 카드 출력
    public function echo_player_card()
    {
		echo "플레이어 : ";
        foreach($this->player as $val)
        {
            echo $val." " ;
        }
		echo "\n";
    }

// player가 뽑은 카드에 따라 점수를 설정해서 player_score변수에 저장
	public function add_player_score_conv()
	{
		foreach($this->player as $val)
		{
			if($val == "A")
			{
				array_push($this->player_score, 1);
			}
			elseif($val == "J" || $val == "Q" || $val == "K")
			{
				array_push($this->player_score, 10);
			}
			else
			{
				array_push($this->player_score, intval($val));
			}
		}
	}

// player_score를 배열을 합산
	public function p_score_sum()
	{
		$this->p_sum_score = array_sum($this->player_score);
		if(in_array(1, $this->player_score) == true)
		{
			$this->p_sum_score += 10;
		}
	}

	public function echo_p_score_sum()
	{
		echo $this->p_sum_score."점\n";
	}



// 뽑은카드 dealer 배열에 하나씩 추가
	public function add_dealer_card()
	{
			array_push($this->dealer, $this->draw_card());
	}

// dealer가 뽑은 카드 출력
    public function echo_dealer_card()
    {
		echo "딜러 : ";
        foreach($this->dealer as $val)
        {
            echo $val." " ;
        }
		echo "\n";
    }

// dealer가 뽑은 카드에 따라 점수를 설정해서 dealer_score변수에 저장
public function add_dealer_score_conv()
{
	foreach($this->dealer as $val)
	{
		if($val == "A")
		{
			array_push($this->dealer_score, 1);
		}
		elseif($val == "J" || $val == "Q" || $val == "K")
		{
			array_push($this->dealer_score, 10);
		}
		else
		{
			array_push($this->dealer_score, intval($val));
		}
	}
}

// dealer_score를 배열을 합산
public function d_score_sum()
{
	$this->d_sum_score = array_sum($this->dealer_score);
	if(in_array(1, $this->dealer_score) == true && $this->d_sum_score < 21)
	{
		$this->d_sum_score += 10;
	}
}

public function echo_d_score_sum()
{
	echo $this->d_sum_score."점\n";
}


}


$obj_blackjack = new Blackjack;

$obj_blackjack->add_player_card();
$obj_blackjack->add_player_card();
$obj_blackjack->add_player_card();
$obj_blackjack->add_player_card();
$obj_blackjack->echo_player_card();
$obj_blackjack->add_player_score_conv();
$obj_blackjack->p_score_sum();
$obj_blackjack->echo_p_score_sum();
$obj_blackjack->add_dealer_card();
$obj_blackjack->add_dealer_card();
$obj_blackjack->add_dealer_card();
$obj_blackjack->add_dealer_card();
$obj_blackjack->echo_dealer_card();
$obj_blackjack->add_dealer_score_conv();
$obj_blackjack->d_score_sum();
$obj_blackjack->echo_d_score_sum();






?>
