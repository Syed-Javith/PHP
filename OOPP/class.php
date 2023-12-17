<?php

class Student{

    public $name;

    public $rno;

    public $dept;

    function setDetail($name , $rno , $dept){
        $this->name = $name;
        $this->rno = $rno;
        $this->dept = $dept;

    }

    function getDetail(){
        echo "$this->name $this->rno $this->dept";
    }
}

$s = new Student();
$s->setDetail("syed",278,"CSE");
$s->getDetail();

?>