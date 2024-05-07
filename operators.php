<?php
echo"Lets start the operators in php";
$a = 55;
$b = 15;
// Arithmetic operators
echo" <br>the sum of the a and b variable is ". ($a + $b);
echo" <br>the subtraction of the a and b variable is ". ($a - $b);
echo" <br>the multiplication of the a and b variable is ". ($a * $b);
echo" <br>the divison of the a and b variable is ". ($a / $b);
echo" <br>the modulos of the a and b variable is ". ($a % $b); // modulos operator tells u the remainder
echo" <br>the divison of the a and b variable is ". ($a ** $b);
// Assignment operators
$x = $a; // we assigned the value of a to x.
echo"<br>the value of x variable is " . $x;
$a += 7;
echo"<br>the updated value of a variable is " . $a;
$b -= 7;
echo"<br>the updated value of b variable is " . $b;
$a *= 7;
echo"<br>the updated value of a variable is " . $a;
$b /= 2;
echo"<br>the updated value of b variable is " . $b;

// Comparison operators
$m = 35;
$n = 46;
echo"<br>the m < n result is";
echo var_dump($m < $n);
// Logical operators
// String operators
// Array operators
// Conditional assignment operators
// Increment/Decrement operators
?>