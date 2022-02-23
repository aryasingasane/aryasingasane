<?php

//LOOPS
//WHILE LOOP
echo "<br><br>"."WHILE LOOP"."<br>";
/*
while(consition) {
    some lines of code
}
*/
$i = 1;
$sum=0;
while ($i<=10) {
    echo $i;
    // echo $sum += $i;
    echo "  , ";
    $i++;
}

//DO-WHILE
echo "<br><br>"."DO-WHILE LOOP"."<br>";
/*
do {
    some lines of code
} while(condition);
*/
$i = 1;
do {
    echo $i." ,  ";
    $i++;
} while($i<5);

//FOR LOOP
echo "<br><br>"."FOR LOOP"."<br>";
/*
for(initialization; condition; inc/dec) {
    some lines of code
}
*/
for ($i=0; $i <= 10 ; $i++) { 
    echo "value of i is $i"."<br>";
}

$friends = array("Snehal","Sunil","Bhavika","Vedant");

echo "<br><br>"."FOR EACH LOOP"."<br>";
echo "this is friends array <br>";
echo var_dump($friends);
echo "<br>";
echo "<br>1st way to iterate array using for loop <br>";
for ($i=0; $i < count($friends); $i++) { 
    echo $friends[$i];
    echo "<br>";
}

//FOREACH 
echo "<br>2nd way to iterate array (better way -> foreach) <br>";
foreach ($friends as  $value) {
    echo "$value <br>";
}

?>