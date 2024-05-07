<?php
echo"data types in php";
/*
string, integer, float, boolean, objects, array,NULL
*/
//String sequence of many characters
$name = "Steve";
$name2 = "Thor";
echo" <br>$name is a good friend of $name2";
//Integer non decimal numbers
$a = "2255";
$b = "+5644";
echo" <br>$a is smaller then $b";

//Flaot decimal numbers
$a = "225.5";
$d = "56.44";
echo"<br>$a is smaller then $d";
// boolean value either true or false
$for = true;
$for1 = false;
// echo"<br> $for is a opp. of $for1";
// var_dump return the type of variable and value of the variable.
var_dump($for);
var_dump($for1);

// Objects
// Array used to store multiple values
$friends = array("Tom","Steve","Tony","Falcon","Bruce");
// echo"<br> avengers are $friends";
var_dump($friends);
echo $friends[4];

// NUll to reset a variable
?>