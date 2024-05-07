<?php
echo"lets start the loops in PHP";
echo"<br>";

echo"<h1>While Loops</h1>";
$a = 0;
while($a<100){
    echo $a+1;
    echo"<br>";
    $a+=8;
}

echo"<h1>For Loops</h1>";
for ($i=0; $i < 10; $i+=3) { 
echo $i;
echo"<br>";
}

// for ($i=0; $i < 10;) { 
// echo $i;
// echo"<br>";
// } // infinite loop

echo"<h1>Do while Loops</h1>";
$b = 0;
do {
    echo $b;
    $b++;
} while ($b < 10);

echo"<h1>Foreach Loops</h1>";
$names = array("Steve", "Tony", "Thor", "Bruce", "Peter", "Clint");
echo $names[4];
// foreach ($names as  $val) {
//      echo "$val <br>";
// }


?>