<?php
// $f = fopen("files.txt", "r");

// $content = fread($f, 15);
// $content = fread($f, filesize("files.txt"));
// echo $content;
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>