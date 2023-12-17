<?php

abstract class Student{

    public $name;

    public $rno;

    public $dept;

    function __construct($name , $rno , $dept){
        $this->name = $name;
        $this->rno = $rno;
        $this->dept = $dept;
    }

    abstract function getDetail();
}

class Department extends Student{
    function __construct($name,$rno,$dept){
        parent::__construct($name,$rno,$dept);
    }
    public function getDetail(){
        echo "$this->name $this->rno $this->dept";
    }
}


$s = new Department("syed",278,"CSE");
$s->getDetail();

?>