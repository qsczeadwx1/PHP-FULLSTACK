<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="pl_ans">
        <input type="number" id="pl-ans" name="pl_ans">
        <input type="submit">
    </form>
</body>
</html>
<?php
    $pl_ans = (int)$_POST['pl_ans'];
    var_dump($_POST);
    if(is_null($pl_ans)) {$pl_ans = 0;}
    $RAN_NUM_1 = mt_rand(0, 2);
    $result = "";
    $result_1 = "이겼습니다.";
    $result_2 = "졌습니다.";
    $result_3 = "비겼습니다.";

if($pl_ans != 0 && $pl_ans != 1 && $pl_ans != 2 )
{
    echo "잘못된 값입니다.";
}
else{
    if($pl_ans == 0)
    {
        switch ($RAN_NUM_1) {
            case $RAN_NUM_1 == 0 :
                echo "비겼습니다.";
                break;
            
            case $RAN_NUM_1 == 1 :
                echo "졌습니다.";
                break;
            
            default:
                echo "이겼습니다";
                break;
        }
    }
}
?>