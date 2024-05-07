<?php
echo "lets start to learn about the functions";

function totalmarks($marksArr){
    $sum = 0;
        foreach($marksArr as $value){
            $sum += $value;
        }
        return $sum;
}
$bharat = [52, 65 ,98 , 88, 90];
$sumMarks = totalmarks($bharat);
echo "the total marks obtained by bharat out of 500 is $sumMarks";
?>
