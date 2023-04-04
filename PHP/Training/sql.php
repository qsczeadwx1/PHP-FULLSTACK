<?php

// 우리가 작성한 my_db_conn 함수를 이용해서 아래 데이터를 출력
// 1. 전체 월급의 평균

include_once("../Example/pnc_db_conn.php");

// $sql =
//     " SELECT "
//     ." AVG(salary) "
//     ." FROM "
//     ." salaries "
//     ." WHERE "
//     ." to_date = DATE(99990101) ";

// my_db_conn( $obj_conn );

// // ----- query 메소드로 하는법
// $stmt = $obj_conn->query( $sql );


// // ----- prepare 메소드로 하는법
// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute();


// $result = $stmt->fetchAll();
// var_dump( $result );

// $obj_conn = null;

// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요

// $sql = 
//     " INSERT INTO employees( "
//     ." emp_no "
//     ." ,birth_date "
//     ." ,first_name "
//     ." ,last_name "
//     ." ,gender "
//     ." ,hire_date "
//     ."  ) "
//     ."  VALUES ( "
//     ."  :emp_no "
//     ." ,:birth_date "
//     ." ,:first_name "
//     ." ,:last_name "
//     ." ,:gender "
//     ." ,:hire_date"
//     ." ) ";

// $arr_prepare =
//     array(
//         ":emp_no"       => 500000
//         ,":birth_date"  => "19980501"
//         ,":first_name"  => "MinGyu"
//         ,":last_name"   => "Kim"
//         ,":gender"      => "M"
//         ,":hire_date"   => "20230404"
//     );

// my_db_conn( $obj_conn );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// $obj_conn = null;

// 3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해주세요

// $sql = 
//     " UPDATE employees "
//     ." SET "
//     ."first_name = :first_name1 "
//     .",last_name = :last_name1 "
//     ." WHERE "
//     ." emp_no = :emp_no1 ";

// $arr_prepare =
//     array(
//         ":first_name1" => "길동"
//         ,":last_name1" => "홍"
//         ,":emp_no1" => 500000
//     );

// my_db_conn( $obj_conn );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $obj_conn->commit();

// $obj_conn = null;


// 4. 2에서 등록한 사원을 삭제해 주세요

$sql = 
    " DELETE FROM employees"
    ." WHERE "
    ." emp_no = :emp_no1 "
    ;

$arr_prepare =
    array(
        ":emp_no1" => 500000
    );

my_db_conn( $obj_conn );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null;

?>