<?php
//Q1: Write a PHP function that acts as a calculator using switch statement.
// function calculator($a, $b, $operator) {
//     switch ($operator) {
//         case '+':
//             echo $a + $b;
//             break;
//         case '-':
//             echo $a - $b;
//             break;
//         case '*':
//             echo $a * $b;
//             break;
//         case '/':
//             echo $a / $b;
//             break;
//         default:
//             echo "Invalid operator";
//     }
// }

// calculator(10, 5, '*'); // Output: 50
// ---------------------------------------------------------------------------

//Q2: Write a function findMax($a, $b, $c) that returns the largest number.

// function findMax($a, $b, $c) {
//     if ($a >= $b && $a >= $c) {
//         return $a;
//     } elseif ($b >= $a && $b >= $c) {
//         return $b;
//     } else {
//         return $c;
//     }
// }

// echo "Max: " . findMax(12, 50, 7);
// --------------------------------------------------------------------------------


//Q3:  Write a function countDown($start) that prints numbers from start to 1.
// function countDown($start) {
//     for ($i = $start; $i >= 1; $i--) {
//         echo "$i<br>";
//     }
// }

// countDown(5);

// ---------------------------------------------------------------------------------------
//Q4:  Create a function average($a, $b, $c) that returns average.

// function average($a, $b, $c) {
//     return ($a + $b + $c) / 3;
// }

// echo "Average: " . average(10, 2, 30);

// ---------------------------------------------------------------------------------------

//Q5:  Create a function named printNames() that takes an array of student names and prints each name with the word "Student:" in front of it using a foreach loop.
// function printNames($names) {
//     foreach ($names as $name) {
//         echo "Student: $name<br>";
//     }
// }

// $students = ["Ali", "Sara", "Ahmed"];
// printNames($students);
// ------------------------------------------------------------------------------------


//Q6:  Write a function in PHP named power() that takes two numbers: base and exp.
// Use a for loop to calculate the result of raising the base to the power of exp.
// Return the final result.

// function power($base, $exp) {
//     $result = 1;
//     for ($i = 1; $i <= $exp; $i++) {
//         $result *= $base;
//     }
//     return $result;
// }

// echo power(2, 4); 

/////////////////////////////////////////////

// function power($base, $exp) {
//     $result = 1;
//     for ($i = 1; $i <= $exp; $i++) {
//         $result *= $base;
//         echo $result . "<br>"; // Har step ka result dikhaye
//     }
// }

// power(2, 4);
// output
// 2  
// 4  
// 8  
// 16



?>


