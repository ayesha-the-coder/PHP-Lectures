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

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// PHP Lecture-2 Students Task
// Q1: Q1: Write a PHP program to calculate the total marks, percentage, and grade of a student based on five subject marks, and display the result in an HTML table.
$name = "Ayesha";
$english = 56;
$urdu = 70;
$computer = 30;
$math = 60;
$islamic = 35;
$grade = "";

$total = $english+$urdu+$computer+$math+$islamic;
$per = $total/500*100;

if($per >=90){
    $grade = "A+ Grade" ;
}
else if($per >=80){
   $grade = "A Grade" ;
    
}
else if($per >=70){
    $grade = "B Grade" ;
    
}
else if($per >=60){
    $grade = "C Grade" ;
    
}
else{
    $grade = "Fail";
}
?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>English</th>
        <th>Urdu</th>
        <th>Computer</th>
        <th>Math</th>
        <th>Islamic</th>
        <th>Total</th>
        <th>Percentage</th>
        <th>Garde</th>

    </tr>

    <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $english ?></td>
    <td><?php echo $urdu ?></td>
    <td><?php echo $computer ?></td>
    <td><?php echo $math ?></td>
    <td><?php echo $islamic ?></td>
    <td><?php echo $total ?></td>
    <td><?php echo $per ?></td>
    <td><?php echo $grade ?></td>

    </tr>
</table>

<!-- --------------------------------------------------------------------- -->

<?php
// Q2: Assignment Operators. Start with $total = 100, then add 25, subtract 10, multiply by 2, and divide by 5 using Assignment Operators.

$total = 100;
echo "Initial total: $total<br>";
$total += 25;
echo "After adding 25: $total<br>";
$total -= 10;
echo "After subtracting 10: $total<br>";
$total *= 2;
echo "After multiplying by 2: $total<br>";
$total /= 5;
echo "After dividing by 5: $total";

// ----------------------------------------------------------------

// Q3: Create two string variables $firstName and $lastName. Concatenate them to from a full name and display it.

$firstName = "Alice";
$lastName = "Smith";
$fullName = $firstName . " " . $lastName;
echo "Full Name: $fullName";


// -----------------------------------------------------------------

// Q4: Check if a number is between 10 and 100. Store the number in $value and use logical operator to verify.

$value = 45;
if ($value > 10 && $value < 100) {
    echo "$value is between 10 and 100";
} else {
    echo "$value is not between 10 and 100";
}
// -------------------------------------------------------------------

//Q5: Check if a person is eligible to vote (age >= 18 and nationality is Pakistani). Using Logical + Comparison Operator.

$age = 20;
$nationality = "Pakistani";

if ($age >= 18 && $nationality == "Pakistani") {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible.";
}
// ------------------------------------------------------------------------


// Q6: Create a program that tasks a grade (A, B,C,D,F) and display a corresponding message using switch-case.

$grade = 'B'; // Change this to test different grades

switch ($grade) {
    case 'A':
        echo "Excellent!";
        break;
    case 'B':
        echo "Good job!";
        break;
    case 'C':
        echo "Average performance";
        break;
    case 'D':
        echo "Needs improvement";
        break;
    case 'F':
        echo "Failed - must retake";
        break;
    default:
        echo "Invalid grade";
}


?>