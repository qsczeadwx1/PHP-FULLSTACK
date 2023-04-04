<?php

include_once("./pnc_db_conn.php");

// 로그인 구현할때 많이 씀
// try-catch문
try
{
    // 우리가 실행하고 싶은 소스코드를 작성
}
catch(\Throwable $th)
{
    // 에러가 발생했을 때 실행되는 소스코드를 작성
}
finally
{
    // 정상처리 또는 에러 처리시에 무조건 실행되는 소스코드를 작성
}

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll();
    
    if( count( $result ) === 0 )
    {
        // throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건");
    }
    
    var_dump( $result );
    echo "try\n";
}
catch( Exception $e )
{
    if($e->getMessage() === "E99" )
    {
        echo "데이터 0건입니다";
    }
    else 
    {
        echo $e->getMessage();
    }
}
finally
{
    echo "Finally";
    $obj_conn = null;
}


?>