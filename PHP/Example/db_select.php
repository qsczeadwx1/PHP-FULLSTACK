<?php

include_once("./pnc_db_conn.php");

$obj_conn = null; // PDO class

// DB connect 
my_db_conn( $obj_conn );

// sql
$sql = 
    " SELECT "
    ." * "
    ." FROM "
    ." employees "
    ." LIMIT :limit_start ";

$arr_prepare =
    array(
        ":limit_start" => 5
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump( $result );

$obj_conn = null; // DB connection 파기

?>