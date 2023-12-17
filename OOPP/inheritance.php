<?php

class Student{

    public $name;

    public $rno;

    public $dept;

    private $password;

    protected $shared ;

    function __construct($name , $rno , $dept){
        $this->name = $name;
        $this->rno = $rno;
        $this->dept = $dept;
        $this->shared = 'sh';
    }

}

class Department extends Student{
    function __construct($name,$rno,$dept){
        parent::__construct($name,$rno,$dept);
    }
    function getDetail(){
        echo "$this->name $this->rno $this->dept";
        echo $this->shared;

    }
}

$d = new Department("syed",278,"CSE");
$d->getDetail();
echo $d->password;
echo $d->shared;

?>