<?php

echo "<h1>Loops</h1>";

$a=1;
while ($a <= 10) {
    echo $a . " ";
    $a++;
}

echo "<br>";

for($i=0 ; $i<=10 ; $i++){
    echo $i . " ";
}
echo "<br>";

$arr = [1 , 3 , 22 , 9];

foreach($arr as $num){
    echo $num . " ";
}

?>