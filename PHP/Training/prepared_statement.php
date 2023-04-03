<?php

// 아래 쿼리로 겨로가를 출력하는 프로그램을 작성

// SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?

// to_date : "9999-01-01"
// salary : 50000
// limit 5

$sa_to_date = "9999-01-01";
$sa_salary = 50000;
$sa_limit = 5;

$dbc = mysqli_connect( "localhost", "root",  "root506", "employees", 3306 ); // DB연결
$stmt = $dbc->stmt_init(); // mysqli_stmt_prepare를 사용하기 위한 객체를 초기화하고 리턴해 줍니다.
$stmt->prepare( " SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ? " );
$stmt->bind_param( "sii", $sa_to_date, $sa_salary, $sa_limit ); // prepared statement의 값을 셋팅
$stmt->execute(); // 쿼리를 실행

$result = $stmt->get_result();  // DB의 쿼리 결과를 저장

while( $row = $result->fetch_assoc() )
{
    echo "emp_no : ", $row["emp_no"], ", salary : ", $row["salary"], "\n";
}

mysqli_close($dbc); // DB close





?>