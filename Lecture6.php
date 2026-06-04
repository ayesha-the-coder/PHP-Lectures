<?php
// index array
// $array = ["aslam", "khan", "aliya"];
// $a = array("rahul",10,50,30);

// echo $array[2];
// echo $a[1];
// echo var_dump($array);

// Associative Array

// $fruits = [
//     'Apple' => 250,
//     'Mango' => 520,
//     'Orange' => 350,
//     'Cherry' => 400
// ];
// echo "Apple Price is : " .$fruits['Apple'];
// echo"Mango Price is : " .$fruits['Mango'];
// echo "Cheery Price is : ".$fruits['Cherry'];

// foreach($fruits as $key => $value){
//     echo $key  ." Price is :" .$value. "<br>";
// }

// -----------------------------------------------------------------
//Update in Index Array

// $studnetsName = ["Ali", "Ahmad", "Sara","Aliyan", "Sultan"];
// var_dump($studnetsName) ;
// echo "<br>";
// $studnetsName[2]= "Maira Khan";
// var_dump($studnetsName);

//Update in  Associative Array
// $studentsMarks = [
//     "Ali" => 50,
//     "Ahmad" => 66, 
//     "Sara" => 75,
//     "Aliyan" => 65 , 
//     "Sultan" => 60

// ];
// var_dump($studentsMarks);
// echo "<br>";
// $studentsMarks["Ali"]= 95;
// var_dump($studentsMarks);


// Add New Value in Indexed Array
// $studnetsName = ["Ali", "Ahmad", "Sara","Aliyan", "Sultan"];
// $studnetsName[] = "Salman";
// var_dump($studnetsName);


// Add New Key-Value in Associative Array
// $studentsMarks = [
//     "Ali" => 50,
//     "Ahmad" => 66, 
//     "Sara" => 75,
//     "Aliyan" => 65 , 
//     "Sultan" => 60

// ];
// $studentsMarks["Fatima"]= 85;
// var_dump($studentsMarks);

// Array Function------------------------------------------------------------------------

// array_unshift function
// $color = ["red", "green"];
// array_unshift($color,"Orange");
// var_dump($color);


// array_shift function
// $color = ["red", "green"];
// array_shift($color);
// var_dump($color);

// array_splice function
$color = ["red", "green"];
var_dump($color);
echo "<br>";
array_splice($color,1,0, "pink");
var_dump($color);


// //////////////////////////////////////////////////////////////////////////////////////////////////////
// Q1: Update Indexed Array: Update the 2nd item in the array ["Apple", "Banana", "Cherry"] to "Mango".
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[1] = "Mango"; // Index 1 means the second item
print_r($fruits);

// Q2: Update Associative Array :In the array ["name" => "Ali", "age" => 20], update "age" to 25.
$student = ["name" => "Ali", "age" => 20];
$student["age"] = 25;
print_r($student);

// Q3: Add New Value in Indexed Array Add "Pineapple" at the end of the array ["Apple", "Banana"].
$fruits = ["Apple", "Banana"];
$fruits[] = "Pineapple"; // Or use array_push($fruits, "Pineapple");
print_r($fruits);

// Q4: Add New Key-Value in Associative Array:Add "grade" => "A" to the array ["name" => "Ali", "age" => 25].
$student = ["name" => "Ali", "age" => 25];
$student["grade"] = "A";
print_r($student);


// Q5: Use array_unshift: Add "Mango" to the beginning of ["Apple", "Banana"].
$fruits = ["Apple", "Banana"];
array_unshift($fruits, "Mango");
print_r($fruits);









?>