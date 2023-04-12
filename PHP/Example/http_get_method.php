<?php
// 1. GET Method로 데이터를 넘겨주는 방법 1
// - Query String에 키와 값을 셋팅 해준다.
// https://localhost/src/board_update.php?test1=testValue1
// https://localhost/src/board_update.php?test1=testValue1&test2=testValue2


// 1-2 form Tag를 이용하는 방법

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="httpget.php">
        <input type="text" name="test1" value="testValue1">
        <input type="text" name="test2" value="testValue2">
        <button type="submit">Submit</button>
    </form>
</body>
</html>