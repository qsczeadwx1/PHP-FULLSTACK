<?php

// 우리가 작성한 my_db_conn 함수를 이용해서 아래 데이터를 출력
// 1. 전체 월급의 평균

// include_once("../Example/pnc_db_conn.php");


// my_db_conn( $obj_conn );

// $sql =
//     " SELECT "
//     ." AVG(salary) "
//     ." FROM "
//     ." salaries ";

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute();
// $result = $stmt->fetchAll();
// var_dump($result);

// $obj_conn = null;

// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요

// include_once("../Example/pnc_db_conn.php");

// my_db_conn( $obj_conn );

// $sql = 
//     " INSERT INTO employees( "
//     ." emp_no "
//     .",birth_date "
//     .",first_name "
//     .",last_name "
//     .",gender "
//     .",hire_date "
//     ." ) "
//     ." VALUES ( "
//     ." :emp_no "
//     .",:birth_date "
//     .",:first_name "
//     .",:last_name "
//     .",:gender "
//     .",:hire_date"
//     ." ) ";

// $arr_prepare =
//     array(
//         ":emp_no" => 500000
//         ,":birth_date" => DATE(19980501)
//         ,":first_name" => "MinGyu"
//         ,":last_name" => "Kim"
//         ,":gender" => "M"
//         ,":hire_date" => DATE(20230403)
//     );
// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// $obj_conn = null;

// // // 3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해주세요

// include_once("../Example/pnc_db_conn.php");

// my_db_conn( $obj_conn );

// $sql = 
//     " UPDATE employees "
//     ." SET "
//     ."first_name = 'GilDong' "
//     .",last_name = 'Hong' "
//     ." WHERE "
//     ." emp_no = :emp_no1 ";

// $arr_prepare =
//     array(
//         ":emp_no1" => 500000
//     );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// $obj_conn = null;


// // // 4. 2에서 등록한 사원을 삭제해 주세요

include_once("../Example/pnc_db_conn.php");

my_db_conn( $obj_conn );

$sql = 
    " DELETE FROM"
    ." employees "
    ." WHERE "
    ." emp_no = :emp_no1 ";


$arr_prepare =
    array(
        ":emp_no1" => 500000
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null;

?>