<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    echo $id;
    $con = new mysqli("localhost", "root", "root123", "employee_management");
    
    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        $query = "INSERT INTO employee VALUES($id , '$name' ,$salary , '$department' )";

        $result = $con->query($query);
        if($result){
            header('Location: index.php');
        }else{
            echo 'error';
        }
    }
}
?>