<?php

class People
{
    protected $name;
    protected $age;

    function print_info()
    {
        echo "이름 : ".$this->name."\n"
        ."나이 : ".$this->age."\n";
    }
}

class Student extends People
{
    private $std_no;

    function __construct($name, $age, $std_no)
    {
        $this->name = $name;
        $this->age = $age;
        $this->std_no = $std_no;
    }

    // function print_std_info()
    // {
    //     echo "학생정보\n"
    //     ."이름 : ".$this->name."\n"
    //     ."나이 : ".$this->age."\n"
    //     ."학번 : ".$this->std_no."\n";
    // }

    // 함수 오버라이딩으로 위와 똑같이 구현
    function print_info()
    {
        echo "학생정보\n";
        parent::print_info();
        echo "학번 : ".$this->std_no."\n";
    }
}

class Professor extends People
{
    private $profe_no;

    function __construct($name, $age, $profe_no)
    {
        $this->name = $name;
        $this->age = $age;
        $this->profe_no = $profe_no;
    }

    function print_profe_info()
    {
        echo "교수정보\n"
        ."이름 : ".$this->name."\n"
        ."나이 : ".$this->age."\n"
        ."교번 : ".$this->profe_no."\n";
    }
}

class Staff extends People
{
    private $stf_no;

    function __construct($name, $age, $stf_no)
    {
        $this->name = $name;
        $this->age = $age;
        $this->stf_no = $stf_no;
    }

    function print_stf_info()
    {
        echo "직원정보\n"
        ."이름 : ".$this->name."\n"
        ."나이 : ".$this->age."\n"
        ."직원번호 : ".$this->stf_no."\n";
    }
}

$student = new Student('김', '19', '201710201');
$profe = new Professor('박', '40', '123');
$staff = new Staff('장', '32', '1234');

// $student->print_std_info();
// $profe->print_profe_info();
// $staff->print_stf_info();

$student->print_info();
$profe->print_profe_info();
$staff->print_stf_info();
?>
