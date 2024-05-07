<?php
echo"varibale scopes in php";
echo "<br>";
$a = "bharat"; //this is a global variable
function printz(){
    // $a = "tony"; local variable
    global $a;  //method to call a global varibale in a local scope variable
    $a = "steve";
    // this is a local varibale, this is made inside a funtion

    echo " <br> the name of the boss is $a";
}

echo $a;
printz();
echo " <br> the name of the boss is $a";
?>