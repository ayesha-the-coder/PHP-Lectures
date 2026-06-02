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



?>