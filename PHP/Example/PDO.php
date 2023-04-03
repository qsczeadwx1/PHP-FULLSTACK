<?php

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
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );

// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성 
// $sql = 
//     " SELECT "
//     ." sal.salary "
//     ." ,emp.emp_no "
//     ." ,emp.birth_date "
//     ." FROM "
//     ." salaries sal "
//     ." INNER JOIN employees emp "
//     ."    ON emp.emp_no = sal.emp_no "
//     ." WHERE "
//     ." ( "
//     ."   emp.emp_no = :emp_no1 "
//     ."   OR emp.emp_no = :emp_no2 "
//     ." ) "
//     ." AND sal.to_date >= now() ";
// $arr_prepare = 
//     array(
//         ":emp_no1" => 10001
//         ,":emp_no2" => 10002
//     );


// $stmt = $obj_conn->prepare( $sql ); // prepare statement를 생성
// $stmt->execute( $arr_prepare ); // 쿼리 실행
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
// // var_dump( $result );

// foreach( $result as $val )
// {
//     echo $val["salary"], ' ' ,$val["emp_no"], ' ', $val["birth_date"], "\n";
// }
// $obj_conn = null; // DB 파기



// INSERT 예제
$sql =
    " INSERT INTO departments( "
    ." dept_no"
    ." ,dept_name"
    ." ) "
    ." VALUES( "
    ." :dept_no "
    ." ,:dept_name "
    ." ) ";

$arr_prepare =
    array(
        ":dept_no" => "d011"
        ,":dept_name" => "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
$result = $stmt->execute( $arr_prepare );

$obj_conn->commit();

var_dump( $result );


$obj_conn = null;









?>