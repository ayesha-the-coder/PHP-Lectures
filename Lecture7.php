<?php
//Multidimensional Arrays -------------------------------------------------------------------------
// Indexed Multidimensional Array

// $students = [
//     ["Ali", 20, "BBA", "Karachi"],
//     ["Sara", 22, "MBA", "Multan"],
//     ["Umar", 21, "BSCS", "Lahore"],
//     ["Manahil", 19, "BSCS" , "Islamabad"]
// ];

// echo $students[0][0] ." ";
// echo $students[0][1] . " ";
// echo $students[0][2] . " ";
// echo $students[0][3] . " ";

// echo "<br>";
// echo $students[1][0] ." ";
// echo $students[1][1] . " ";
// echo $students[1][2] . " ";
// echo $students[1][3] . " ";


// foreach ($students as $value){
//         foreach($value as $value2){
//                 echo $value2 ." ";
//             }
//             echo "<br>";
//         }
        

// foreach ($students as $student) {
//     echo "Name: " . $student[0] . ", Age: " . $student[1] . ", Degree: " . $student[2] .", City: " .$student[3] . "<br>";
// }

// Example # 1 Associative Multidimensional Array

// $student_data = [
//     [
//         "name" => "Ali",
//         "age" => 20,
//         "degree" => "BBA"
//     ],
//     [
//         "name" => "Sara",
//         "age" => 22,
//         "degree" => "MBA"
//     ]

// ];
// foreach($student_data as $val){
//     echo "Name: " . $val["name"] . ", Age: " . $val["age"] . ", Degree: " . $val["degree"]. "<br>";
// }

// Example # 2 Associative Multidimensional Array 

$data = [
    "student1" => [

        "name" => "Munir",
        "age" => 26,
        "course" => "Html"
    ],
    "student2" => [

        "name" => "Fawad",
        "age" => 22,
        "course" => "Css"
    ],
    "student3" => [

        "name" => "Hamza",
        "age" => 22,
        "course" => "Java"

    ]

];

echo $data['student1']['name']. " "; 
echo $data['student3']['age'];

// foreach ($data as $key => $value){
//         echo $key . " ";
//         foreach($value as $value2){
//                 echo $value2 ." ";
//             }
//             echo "<br>";
//         }
        

// ------Task---------------------------------------------------------------------- 
// $students = [
                        
//      [   1, "Ali" ,  "Computer Operator " , 25000],   
//      [   2, "Ahmad" , " Supervisor " , 55000],          
//      [   3, " Farhan " , " Manager " , 95000],   
//      [   4, " Mirha " , " Assistant " , 45000 ]   
// ];

/////////////////////////////////////////////////////////////////////////////////////

// Q1: Create a multidimensional associative array of 2 students with keys: Name, Age, Country. Print all values.
$students = [
    'Student1' => ['Name' => 'Ali', 'Age' => 18, 'Country' => 'Pakistan'],
    'Student2' => ['Name' => 'Sara', 'Age' => 20, 'Country' => 'UAE']
];

foreach ($students as $key => $student) {
    echo "<strong>$key</strong><br>";
    echo "Name: " . $student['Name'] . "<br>";
    echo "Age: " . $student['Age'] . "<br>";
    echo "Country: " . $student['Country'] . "<br><br>";
}
// Q2: Store 2 students' names and their 3 subject marks. Use nested arrays. Show each student’s name and subject marks.

$students = [
    'Ali' => ['Math' => 85, 'Science' => 90, 'English' => 88],
    'Sara' => ['Math' => 78, 'Science' => 92, 'English' => 80]
];

foreach ($students as $name => $subjects) {
    echo "<strong>Student: $name</strong><br>";
    foreach ($subjects as $subject => $marks) {
        echo "$subject: $marks<br>";
    }
    echo "<br>";
}
// Q3: Create a multidimensional array of 3 students with Name, Age, Grade. Display data inside an HTML table.
$students = [
    ['Name' => 'Laiba', 'Age' => 19, 'Grade' => 'A'],
    ['Name' => 'Ahmed', 'Age' => 20, 'Grade' => 'B'],
    ['Name' => 'Hassan', 'Age' => 18, 'Grade' => 'A+']
];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Age</th><th>Grade</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['Name'] . "</td>";
    echo "<td>" . $student['Age'] . "</td>";
    echo "<td>" . $student['Grade'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>



