<?php
echo"Lets start the math functions in PHP";
$zip = 2.69;
echo "<br>";
// pi funtion
echo pi();
echo "<br>";
// min() and max() function to find the minimum and maximum value of the listed arguments
echo min(100,0,-550,200,1);
echo "<br>";
echo max(100,0,-550,200,1);
echo "<br>";
// abs function function returns the absolute (positive) value of a number
echo abs(-7.4);
echo "<br>";
// sqrt() function returns the square root of a number:
echo sqrt(64);
echo "<br>";
echo sqrt(545);
echo "<br>";
echo sqrt(9);
echo "<br>";
echo sqrt(0);
echo "<br>";
//round() function rounds a floating-point number to its nearest integer:
echo round(0.60);
echo "<br>";
echo ("the round value of this number is " . round($zip));
echo "<br>";
// Random Numbers rand() function generates a random number:
echo rand();
echo "<br>";
echo rand(1000,10000);

?>