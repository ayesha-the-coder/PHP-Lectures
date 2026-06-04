<?php
// for ($i=1; $i <=3 ; $i++) { 
//     echo "<b>Outer Loop </b>" . $i ."<br>";
//     for ($j=0; $j <=5 ; $j++) { 
//          echo "Inner Loop " . $j ."<br>";
//     }
// }
for ($a=1; $a <=5 ; $a++) {
    // echo $a;

    for ($f=1; $f <=$a ; $f++) { 
        echo $a;
    }
    echo "<br>";
}

/////////////////////////////////////////////////////////////////////////////////


// Task---------------------------------------------------------------------

// Q1: Multiplication Table (1 to 3)

for ($i = 1; $i <= 3; $i++) {
    echo "Table of $i:<br>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>"; // For spacing between tables
}

// ------------------------------------------------------------
// Q2: Write a PHP program that use nested loops to print following triangle pattern using star (*).

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
// -----------------------------------------------------------

// Q3: Write a PHP program that uses nested loops to print the following triangle pattern where each row prints numbers from 1 up to the current row number, and rows decrease from n to 1.

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
// --------------------------------------------------------------
// Q4: Repeating Same Number in Each Row (Reverse Order)

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}

// -Task End------------------------------------------------------------

/////////////////////////////////////////////////////////////////////////////////









?>