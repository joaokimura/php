<?php 


$num1 = 10;
$num2 = '10';

echo "<pre>";

//AND
var_dump(true and true);
var_dump(true and false);
var_dump(false and false);

echo "<hr>";
//OR
var_dump(true or true);
var_dump(true or false);
var_dump(false or false);

echo "<hr>";
//XOR
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);

echo "<hr>";
var_dump(!(5 > 10));

 ?>