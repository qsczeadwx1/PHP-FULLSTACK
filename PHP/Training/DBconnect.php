<?php

// 사원이 10005 이하 사번, 이름(성 이름), 성별, 생년월일

$db_connect = mysqli_connect("localhost", "root",  "root506", "employees", 3306);

$result_query = mysqli_query($db_connect
                , "SELECT emp_no, CONCAT(last_name,' ' ,first_name) full_name, gender, birth_date 
                FROM employees
                WHERE emp_no < 10006;");

// while($temp_row = mysqli_fetch_assoc($result_query))
// {
//     echo $temp_row["emp_no"],"\n",$temp_row["full_name"],"\n",$temp_row["gender"],"\n",$temp_row["birth_date"],"\n";
// }


// flag사용해서 데이터없는거 찾기
// $cnt_flag = false;
// while($temp_row = mysqli_fetch_assoc($result_query))
// {
//     {
//     echo $temp_row["emp_no"],"\n",$temp_row["full_name"],"\n",$temp_row["gender"],"\n",$temp_row["birth_date"],"\n";
//     }
//     $cnt_flag = true;
// }
// if($cnt_flag == false)
// {
//     echo "데이터가 0건 입니다.";
// }


// mysqli_num_rows 로 없는데이터 찍기

while($temp_row = mysqli_fetch_assoc($result_query))
{
    {
    echo $temp_row["emp_no"],"\n",$temp_row["full_name"],"\n",$temp_row["gender"],"\n",$temp_row["birth_date"],"\n";
    }
    
}
if($temp_num_row = mysqli_num_rows($result_query) == 0)
{
    echo "데이터가 0건 입니다.";
}

mysqli_close($db_connect);
?>