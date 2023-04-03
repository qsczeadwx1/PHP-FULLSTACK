<?php

// DB 연결
$dbc = mysqli_connect("localhost", "root",  "root506", "employees", 3306);

// var_dump($dbc);

// 쿼리
// $result_query = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT ?");
$i = 5;
// prepared statement : 
$stmt = $dbc->stmt_init(); // statement를 셋팅
$stmt->prepare("SELECT emp_no, first_name FROM employees LIMIT ?"); // DB 질의 할 쿼리를 작성
$stmt->bind_param("i", $i); // prepare 셋팅 "i"부분에 입력될 데이터 타입을 적음 "iiiis"등으로
$stmt->execute(); // DB에 쿼리 질의 실행

// ------- 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
// $stmt->bind_result( $col1, $col2 ); // 질의 결과를 각 아규먼트(bind_result안에 값)에 저장
// $stmt->fetch(); // bind_result에서 세팅한 아규먼트에 값 저장(한번 실행 될 때 마다 한 레코드씩 저장)
// var_dump( $col1, $col2 );



// fetch를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while($stmt->fetch())
// {
//     echo "$col1 $col2\n";
// }


// ------연상 배열로 가져오는 방법
$result = $stmt->get_result(); // 질의 결과를 저장

// fetch를 루프로 돌려서 모든 질의 결과를 가져오는 방법
while($row = $result->fetch_assoc())
{
    var_dump($row);
}

// var_dump($result_query);

// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// for($i=0; $i < 300025; $i++)
// {
//     $result_row = mysqli_fetch_row($result_query);
//     var_dump($result_row);
// }

// while($temp_row = mysqli_fetch_row($result_query))
// {
//     var_dump($temp_row);
// }




// while($temp_row = mysqli_fetch_assoc($result_query))
// {
//     var_dump($temp_row["first_name"]);
// }


mysqli_close($dbc);


?>