<?php

$s = "Hello";

$name = "Syed Javith";

$greet = "Welcome $name";

echo $greet;

echo "<br>";

echo "length is " . str_word_count($greet);
echo "<br>";

echo "length is ". strlen($greet);
echo "<br>";

echo "pos of el is ". strpos($greet,"el");
echo "<br>";

echo strtoupper($greet);
echo "<br>";

echo strtolower($greet);
echo "<br>";

echo str_replace("e","o",$greet);
echo "<br>";

echo strrev($greet);
echo "<br>";

echo substr($greet,2,8);
echo "<br>";

var_dump(explode("e",$greet));
echo "<br>";


?>