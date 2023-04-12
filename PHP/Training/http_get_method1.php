<?php

    // 1. Get Method로 사용자가 입력한 데이터를 http request 합니다
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //      2-1. key : id, pw, name, birth_date
    // 3. echo를 이용해서 각각의 데이터를 출력해 주세요
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
    <form method="GET" action="http_get_method1.php">
        <input type="text" name="id">
        <br>
        <input type="password" name="pw">
        <br>
        <input type="text" name="name">
        <br>
        <input type="date" name="birth_date">
        <br>
        <button type="submit">제출</button>
    </form>
</body>
</html>

<?php
$var_get = $_GET;
foreach( $var_get as $key => $val)
{
    echo $key," : ",$val,"\n";
}
?>
