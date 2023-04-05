<?php

class People
{
    protected $name;

    // public function __contsruct( $param_name )
    // {
    //     $this->name = $param_name;
    // }

    public function setName( $param_name )
    {
        $this->name = $param_name;
    }

    public function peoplePrint()
    {
        $str = "이름 : $this->name\n";
        echo $str;
    }
}

class Student extends People
{
    protected $id;

    // public function __construct( $param_name, $param_id )
    // {
    //     $this->name = $param_name;
    //     $this->id = $param_id;
    // }

    public function setid( $param_id )
    {
        $this->id = $param_id;
    }

    public function studentPrint()
    {
        echo "아이디 : $this->id\n"
        ;
        parent::peoplePrint();
    }
}
$obj_people = new People();
$obj_student = new Student();
// $obj_stduent->setName( "홍길동" );
$obj_student->setName( "홍길동");
$obj_student->setid( "00001" );
$obj_student->studentPrint();


?>