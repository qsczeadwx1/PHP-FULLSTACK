<?php

// --------------------------------
// 함수명   : my_db_conn
// 기능     : DB connect
// 파라미터 : PDO   $param_conn
// 리턴     : 없음 
// -------------------------------
function my_db_conn( &$param_conn )
{
    $db_host        = "localhost";  // ip주소
    $db_user        = "root";
    $db_password    = "root506";
    $db_name        = "employees";
    $db_charset     = "utf8mb4";    // charset
    $db_dns         = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option      =
        array(
            PDO::ATTR_EMULATE_PREPARES      => false // DB의 prepared statement 기능을 사용하도록 설정
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION // PDO exception을 throws하도록 설정
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC // 연상배열로 fetch를 하도록 설정
        );
// PDO class로 DB연동
$param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
}

// $obj_conn = null; // PDO class

// // DB connect 
// my_db_conn( $obj_conn );

// // sql
// $sql = 
//     " SELECT "
//     ." * "
//     ." FROM "
//     ." employees "
//     ." LIMIT :limit_start ";

// $arr_prepare =
//     array(
//         ":limit_start" => 5
//     );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $result = $stmt->fetchAll();

// var_dump( $result );

// $obj_conn = null; // DB connection 파기
?>