<?php

class Student{

    public $name;

    public $rno;

    public $dept;

    function __construct($name , $rno , $dept){
        $this->name = $name;
        $this->rno = $rno;
        $this->dept = $dept;

    }

    function getDetail(){
        echo "$this->name $this->rno $this->dept";
    }
}

$s = new Student("syed",278,"CSE");
$s->getDetail();

?>