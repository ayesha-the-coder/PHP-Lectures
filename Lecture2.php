<?php
echo "<h1>Arithemetic Operators </h1>";
$a = 50;
$b = 10;
echo"Addition  is " . $a+$b . "<br>";
echo"Subtraction is " . $a-$b . "<br>";
echo"Multiple is " . $a*$b . "<br>";
echo"Divide is " . $a/$b . "<br>";

echo "<h1>Assignment Operators </h1>";
$c = 100;
$c += 10;

echo "Result is : " . $c;

echo "<h1>Comparison Operators</h1>";

$name = "Ali";
echo var_dump($name) , "<br>";

$d = 100;
$f = 100;

echo "Equal to ";
echo var_dump($d == $f). "<br>";

$sname = "Sana";
$num = 120;


echo "Equal value and Equal Data Type ";
echo var_dump($sname === $num). "<br>";

$x  = 20;
$y  = 10;

echo "Not Equal != ";
echo var_dump($x != $y). "<br>";

echo "<h1>Logical Operators && AND</h1>";
$username = "Aliyan";
$pass = 123;

if($username == "Aliyan" && $pass == 123 ){
    echo "Login Successfully";
}
else {
    echo "Invaild Username";
}

$num1 = 8;
$num2 = 2;

echo "<h1>Logical Operators || OR </h1>";
if($num1 == 8   || $num2 == 2 ){
    echo "Value is True <br>";
}
else {
    echo "Value is False <br>";
}

$login = "ayesha";
if(!($login == "ayesha")){
    echo "Login Successfully..";
}
else{
    echo "Invaild Username";
}


echo "<h1> Switch Case </h1>";

$mycolor = "black";


switch($mycolor){
    case "red":
    echo "This is a ${mycolor} Color";
    break;

    case "blue":
    echo "This is a ${mycolor} Color";
    break;

    case "pink":
    echo "This is a ${mycolor} Color";
    break;

    case "black":
    echo "This is a ${mycolor} Color";
    break;
}

?>