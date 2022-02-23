<?php

/*
OPERATORS 
1. Arithmetic operator
2. Assignment operator
3. Comparison operator
4. Logical Operator 
*/
echo "<br>"."<b><u>OPERATORS</u>"."<br><br><br>"."ARITHMETIC OPERATORS"."</b><br><br>";
//1. ARITHMETIC OPERATOR 
$a = 20;
$b = 10;
echo "a = $a and b = $b"."<br>";
echo "Addition is :" . ($a+$b) . "<br>";
echo "Subtarction is :" . ($a-$b) . "<br>";
echo "Multiplication is :" . ($a*$b) . "<br>";
echo "Division is :" . ($a/$b) . "<br>";
echo "Modules is :" . ($a%$b) . "<br>";
echo "Increment of a is :" . (++$a) . "<br>";
echo "Decrement of a is :" . (--$a) . "<br>";
echo "Increment of b is :" . (++$b) . "<br>";
echo "Decrement of b is :" . (--$b) . "<br>";

//2.ASSIGNEMENT OPRATOR
echo "<br><b> ASSIGNMENT OPERATORS </b><br><br>";
$x = $a;
echo "For x, the value is ".$x."<br>";
$a += 6; //$a = $a+6
echo "For a+=6, the value is ".$a."<br>";
$a -= 6;
echo "For a-=6, the value is ".$a."<br>";
$a *= 2;
echo "For a*=2, the value is ".$a."<br>";
$a /= 2;
echo "For a/=2, the value is ".$a."<br>";
$a %= 2;
echo "For a%=2, the value is ".$a."<br>";

//3. Comparison operator
echo "<br><b> COMPARISON OPERATORS </b><br><br>";
$x = 7;
$y= 10;
echo "x = $x and y = $y"."<br>";
//echo "For x==y, the result is ".($x == $y)."<br>"; //returns true if true otherwise keeps it blank 
echo "For x==y, the result is ";
echo var_dump($x == $y);
echo "<br>"; 

echo "For x>y, the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y, the result is ";
echo var_dump($x<$y);
echo "<br>";

echo "For x>=y, the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo "For x<=y, the result is ";
echo var_dump($x <= $y);
echo "<br>";

//4.LOGICAL OPERTORS 
echo "<br><b> LOGICAL OPERATORS </b><br><br>";
$m = true;
$n = false;
echo "m = true and n = false"."<br>";

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";

echo "For !n, the result is ";
echo var_dump(!$n);
echo "<br>";

echo "For m xor n, the result is ";
echo var_dump($m xor $n);
echo "<br>";


?>