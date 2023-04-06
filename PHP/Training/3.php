<?php
while(true) 
{
	echo '시작';
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		break;
	}
	echo $input;
	print "\n";
}


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


for($i = 0; $i < 2; $i++)
{
        if($deck[$random] == "A" )
        {
            $arr = array_push($player, "11");
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
        else if($deck[$random] == "J" || $deck[$random] == "Q" || $deck[$random] == "K" )
        {
            $arr = array_push($player, "10");
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
        else
        {
            $arr = array_push($player, $deck[$random]);
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
}

for($i = 0; $i < 2; $i++)
{
    $random = mt_rand(0,$total);
        if($deck[$random] == "A" )
        {
            $arr = array_push($dealer, "11");
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
        else if($deck[$random] == "J" || $deck[$random] == "Q" || $deck[$random] == "K" )
        {
            $arr = array_push($dealer, "10");
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
        else
        {
            $arr = array_push($dealer, $deck[$random]);
            $arr_del = array_splice($deck, array_search($deck[$random],$deck),1 );
            --$total;
        }
}




if(array_sum($player) < array_sum($dealer))
{
    echo "플레이어 : ",array_sum($player),"\n","딜러 : ",array_sum($dealer),"\n플레이어 패배";
}
else if(array_sum($player) == array_sum($dealer))
{
    echo "플레이어 : ",array_sum($player),"\n","딜러 : ",array_sum($dealer),"\n무승부";
}
else if(array_sum($player) > array_sum($dealer))
{
    echo "플레이어 : ",array_sum($player),"\n","딜러 : ",array_sum($dealer),"\n플레이어 승리";
}

echo "\n끝!\n";

?>