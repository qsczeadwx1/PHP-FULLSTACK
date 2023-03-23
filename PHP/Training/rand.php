<?php
    $RAN_NUM_1 = mt_rand(0, 2);
    $RAN_NUM_2 = mt_rand(0, 2);
    $result = "";

if($RAN_NUM_1 != $RAN_NUM_2)
{
    if($RAN_NUM_1 === 0 && $RAN_NUM_2 === 1)
    {
        $result = "당신은 가위 컴퓨터는 바위를 내서 당신이 이겼습니다.";
        echo $result;
    }
    else if($RAN_NUM_1 === 0 && $RAN_NUM_2 === 2)
    {
        $result = "당신은 가위 컴퓨터는 보를 내서 당신이 졌습니다.";
        echo $result;
    }
    else if($RAN_NUM_1 === 1 && $RAN_NUM_2 === 0)
    {
        $result = "당신은 바위 컴퓨터는 가위를 내서 당신이 이겼습니다.";
        echo $result;
    }
    else if($RAN_NUM_1 === 1 && $RAN_NUM_2 === 2)
    {
        $result = "당신은 바위 컴퓨터는 보를 내서 당신이 졌습니다.";
        echo $result;
    }
    else if($RAN_NUM_1 === 2 && $RAN_NUM_2 === 0)
    {
        $result = "당신은 보 컴퓨터는 가위를 내서 당신이 졌습니다.";
        echo $result;
    }
    else
    {
        $result = "당신은 보 컴퓨터는 바위를 내서 당신이 이겼습니다.";
        echo $result;
    }
}
else
{
    $result = "비겼습니다.";
    echo $result;
}
?>