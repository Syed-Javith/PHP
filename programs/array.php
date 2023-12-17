<?php
echo "<h1>Arrays</h1>";

$arr = array(3,5,6,1);

echo $arr[2] . " <br>";

$student = array("syed javith" => 278 , "abc" => 34 , "cde" => 77);

echo $student['syed javith'] . "<br>";

foreach($student as $s => $num){
    echo $s . " " . $num . "<br>";
}

?>