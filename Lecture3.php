<?php
echo "<h1>For Loop Example</h1>";

for($i = 0; $i<=5; $i++){
    echo "This is a Number {$i} <br>";
}

echo "<h1>While Loop Example</h1>";

$a = 3;
while($a <=16){
    echo "{$a} <br>";
    $a++;
}
echo "<h1>Do While Loop Example</h1>";

$x = 15;
do{
    echo "Do while Loop {$x} <br> ";
    $x++;
}while($x <= 11);

echo "<h1>foreach Loop Example</h1>";

$color = ["red" , "green", "orange", "yellow", "pink"];

foreach($color as $value){
    // echo "{$value} <br>";
    echo "{$color[2]} <br>";
}

echo "<h1>foreach Loop Example 2</h1>";

$student = [
    "name" => "Aliyan",
    "age" => 21,
    "city" => "Karachi",
    "course" => "web development"

];
foreach($student as $key => $val){

// echo "$key : $val <br>";
// echo "student name is : {$student['name']} <br>";
  if($key == "name"){
        echo "Student Name is: $val";
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////

// Q1: Print table of 5 using a for loop.
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}

// ------------------------------------------------------------------------------
// Q2: Display numbers 10 to 1 in reverse using for loop.
for ($i = 10; $i >= 1; $i--) {
    echo "$i <br>";
}

// ------------------------------------------------------------------------------

// Q3: Count from 5 to 50 in steps of 5 using while loop.
$x = 5;
while ($x <= 50) {
    echo "$x <br>";
    $x += 5;
}
// ---------------------------------------------------------------------------------

// Q4: Display Pass or Fail Based on Marks in an Array using foreach loop.

$students = [80, 45, 60, 30, 90];

foreach ($students as $marks) {
        if ($marks >= 50) {
                echo "Marks: $marks - Pass<br>";
            } else {
                    echo "Marks: $marks - Fail<br>";
                }
            }
// ----------------------------------------------------------------------------------

// Q5: Print even numbers between 1 to 20 using a for loop.

for($i = 2; $i <= 20; $i += 2) {
    echo $i . " <br>";
}
// Output: 2 4 6 8 10 12 14 16 18 20

// ----------------------------------------------------------------------------------
// Q6: Check Numbers from 1 to 10 Are Greater Than 5 or Not. Use comparison operator .

for ($i = 1; $i <= 10; $i++) {
        if ($i > 5) {
                echo "$i is greater than 5<br>";
            } else {
                    echo "$i is not greater than 5<br>";
    }
}
// ----------------------------------------------------------------------------------
// Q7: Write a PHP program using a foreach loop to display student names and their marks from an associative array.
$marks = [
    "Ali" => 85,
    "Sara" => 92,
    "Omar" => 78
];

foreach ($marks as $name => $score) {
    echo "$name got $score marks <br>";
}

// -----------------------------------------------------------------------------------------
// Lecture 2 - Task:
// In the previous lecture, you created a mark sheet for a single student using PHP.
// Now, your task is to update that mark sheet to handle multiple students using a multidimensional array and a foreach loop.

$students = [
    [
        "name" => "Ayesha",
        "english" => 56,
        "urdu" => 70,
        "computer" => 30,
        "math" => 60,
        "islamic" => 35
    ],
    [
        "name" => "Ali",
        "english" => 80,
        "urdu" => 75,
        "computer" => 85,
        "math" => 90,
        "islamic" => 88
    ],
    [
        "name" => "Zara",
        "english" => 45,
        "urdu" => 60,
        "computer" => 40,
        "math" => 50,
        "islamic" => 42
    ]
];
?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>English</th>
        <th>Urdu</th>
        <th>Computer</th>
        <th>Math</th>
        <th>Islamic</th>
        <th>Total</th>
        <th>Percentage</th>
        <th>Grade</th>
    </tr>

    <?php foreach ($students as $student):
        
            $total = $student['english'] + $student['urdu'] + $student['computer'] + $student['math'] + $student['islamic'];
            $percentage = $total / 500 * 100;

            if ($percentage >= 90) {
                $grade = "A+ Grade";
            } elseif ($percentage >= 80) {
                $grade = "A Grade";
            } elseif ($percentage >= 70) {
                $grade = "B Grade";
            } elseif ($percentage >= 60) {
                $grade = "C Grade";
            } else {
                $grade = "Fail";
            }
        ?>

        <tr>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['english'] ?></td>
            <td><?php echo $student['urdu'] ?></td>
            <td><?php echo $student['computer'] ?></td>
            <td><?php echo $student['math'] ?></td>
            <td><?php echo $student['islamic'] ?></td>
            <td><?php echo $total ?></td>
            <td><?php echo $percentage ?></td>
            <td><?php echo $grade ?></td>
        </tr>
    <?php endforeach; ?>
</table>









