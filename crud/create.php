<?php
include ("conn.php");

if(isset($_POST['btn'])){
   $username =  $_POST['username'];
   $email =  $_POST['email'];
   $password =  $_POST['password'];
   $new_pass = md5('$password');
   $city =  $_POST['city'];

  $query =  "INSERT INTO user (name, email, password , city) VALUES ('$username', '$email', '$new_pass', '$city')";
  $insertData = mysqli_query ($con, $query);
    if($insertData){
        echo "<script>alert('Data Inserted Successfully..')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-6">
                <div class="card shadow p-3">
                    <h1 class="text-center">Insert Data</h1>
                    <div class="card-body">
                        <form action="#" method="post">
                            <label for="form-label">UserName</label>
                            <input type="text" id="form-label" placeholder="Enter Your Name" class="form-control mb-4" name="username">

                             <label for="form-label">Email</label>
                            <input type="email" id="form-label" placeholder="Enter Your Name" class="form-control mb-4" name="email">

                             <label for="form-label">Password</label>
                            <input type="password" id="form-label" placeholder="Enter Your Password" class="form-control mb-4" name="password">

                            <label for="form-label">City</label>
                            <input type="text" id="form-label" placeholder="Enter Your City" class="form-control mb-4" name="city">

                            <button type="submit" class="btn btn-primary w-100" name="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>