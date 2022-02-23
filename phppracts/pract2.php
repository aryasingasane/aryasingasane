<?php

//Conditional statements 
//IF
echo "<br>"."If Statement"."<br>";
$a = 4;
echo "a = $a"."<br>";
if($a>10){
    echo "$a is greater than 10.";
}

//IF-ELSE 
echo "<br>"."If-Else Statement"."<br>";
$num = 7;
echo "number = $num"."<br>";
if($num%2==0){
    echo "$num is an Even Number.";
}
else {
    echo "$num is an Odd Number.";
}

echo "<br><br>";

//IF-ELSEIF
echo "<br>"."If-Elseif Statement"."<br>";
$grade = 65;
echo $grade;
echo "<br>";
if ($grade>=75) {
    echo "Distinction";
}
elseif($grade>=60) {
    echo "first class";
}
elseif($grade>=50) {
    echo "second class";
}
elseif($grade>=40) {
    echo "Passed";
}
else {
    echo "failed";
}

//SWITCH CASE
echo "<br><br>"."Switch case"."<br>";
$day = 5;
echo $day;
echo "<br>";
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid input(day)";
        break;
}


?>