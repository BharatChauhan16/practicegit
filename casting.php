<?php
echo"Lets see type casting in PHP";
echo"<br>Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.";
$a = "Steve";
$b = "5000";
$c = "95.8";
$d = True;
$e = Null;
$f = "Avengers";

// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;

 $f = (int) $f;

// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;
// $f = (string) $f;

// $a = (bool) $a;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;
// $f = (bool) $f;
// $a = (bool) $a;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
?>