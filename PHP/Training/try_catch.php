<?php

// 아래 쿼리를 이용해서 DB접속 > data획득 후 출력
// try-catch로 에러 처리
// 에러가 날 경우에 해당 에러 메세지를 출력
// 정상 종료일 경우 "정상종료"
include_once("../Example/pnc_db_conn.php");

$sql1 = " SELECT * FROM department ";
$sql2 = " SELECT * FROM dept_manager ";

try 
{
    $obj_conn = null;
    my_db_conn($obj_conn);
    $stmt1 = $obj_conn->query( $sql1 );
    $result1 = $stmt1->fetchAll();
    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchAll();
    print_r( $result1 );
    print_r( $result2 );
    echo "정상종료";
} 
catch ( Exception $e) 
{
    echo $e->getMessage();
    
}
finally
{
    $obj_conn = null;
}







?>