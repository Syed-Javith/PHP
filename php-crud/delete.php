<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    echo $id;
    $con = new mysqli("localhost", "root", "root123", "employee_management");
    
    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        $query = "DELETE FROM employee WHERE id = " . $id ;
        $result = $con->query($query);
        if ($result) {
            header('Location: index.php');
        } else {
            echo "Error: " . $con->error;
        }
    }
}

?>


<form action="delete.php" method='post'>

</form>
