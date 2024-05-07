<?php
echo"Stirng functions of PHP";
$name = "The most comprehensive image search";
$name1 = "tab is google";
$name2 = "FIND JOBS ON INDEED";
// strlen to find the length of the string
echo strlen($name);
echo "<br>";
// str_word_count to find the total words fo the string
echo str_word_count($name);
echo "<br>";
// strrev to reverse the string
echo strrev($name);
echo "<br>";
// strpos search anything in the string
echo strpos($name, "image");
echo "<br>";
// str_replace to replace any word in the string
echo str_replace("image", "imagess", $name);
echo "<br>";
// str_repeat to repeat the stirng once or many times
echo str_repeat($name, 10);
echo "<br>";
// Concatenate Strings to combine two strings with(.) operator
echo "$name ".$name1;
echo "<br>";
// strtolower() function returns the string in lower case:
echo strtolower($name2); 
echo "<br>";
// strtoupper() function returns the string in upper case: 
echo strtoupper($name1);  
?>