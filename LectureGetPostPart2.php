<?php
// $_GET Example 1  
if(isset($_GET['btn'])){

    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $contact = $_GET['contact'];

    // echo $name , $email , $password , $contact;
}

// $_POST Example 1 

if(isset($_POST['btn'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="container mt-4 " >
        <h1 class="text-center">Contact Form</h1>
        <div class="row ">
            <div class="col-6 mx-auto shadow-lg p-5 mb-5 bg-body-tertiary rounded">
                
                <form action="welcome.php" method="post">
                    <label>UserName</label>
                    <input type="text" name="name" class="form-control mb-4">
                

                    <label>Email</label>
                    <input type="email" name="email" class="form-control mb-4">
                   

                    <label>Password</label>
                    <input type="password" name="password" class="form-control mb-4">
                   

                    <label>Contact</label>
                    <input type="number" name="contact" class="form-control mb-4">
        

                    <input type="submit" name="btn"/>
                </form>

            </div>
        </div>
    </div>
    <!-- ---------------Lecture8 Part2 Task Code -->
     <!-- Q1: Create a PHP form with 6 fields: Name, Email, Contact Number, City, Gender, and Age.
On form submission, display the submitted data in a Bootstrap-styled table on the same page using the POST method. -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="text-center mb-4">Student Info Form</h2>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter your name" class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Enter your email" class="form-control mb-3" required>
                <input type="text" name="contact" placeholder="Enter contact number" class="form-control mb-3" required>
                <input type="text" name="city" placeholder="Enter your city" class="form-control mb-3" required>
                
                <select name="gender" class="form-control mb-3" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                
                <input type="number" name="age" placeholder="Enter your age" class="form-control mb-3" required>

                <button class="btn btn-dark w-100" name="submit">Submit</button>
            </form>
        </div>
    </div>
    
    <?php
    if (isset($_POST['submit'])) {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $contact = ($_POST['contact']);
        $city = ($_POST['city']);
        $gender = ($_POST['gender']);
        $age = ($_POST['age']);
        
        echo "<div class='row mt-5'>
        <div class='col-md-10 mx-auto'>
        <h3 class='text-center mb-3'>Submitted Student Information</h3>
        <table class='table table-bordered text-center'>
        <thead class='table-dark'>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>City</th>
        <th>Gender</th>
        <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>$name</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$city</td>
        <td>$gender</td>
        <td>$age</td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>";
    }
    ?>
</div> -->

    
</body>
</html>
