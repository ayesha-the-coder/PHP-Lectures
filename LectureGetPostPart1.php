<?php
if(isset($_GET["submitBtn"])){
    $error =array();
    $username = $_GET["username"];
    $email = $_GET["email"];
    $pass = $_GET["password"];
    $contact = $_GET["contact"];

    if(empty($username)){
        $error['username'] = "Username is required";
    }

    if(empty($email)){
        $error['email'] = "email is required";
    }

    if(empty($pass)){
        $error['password'] = "password is required";
    }

    if(empty($contact)){
        $error['contact'] = "contact is required";
    }
    
    if(count($error) == 0){
        header("location:welcome.php?username=$username");
        exit;
    }

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
                
                <form action="#" method="get">
                    <label>UserName</label>
                    <input type="text" name="username" class="form-control mb-4">
                    <span style="color:red"><?php if(isset($error['username'])){ echo $error['username']; }  ?></span>

                    <label>Email</label>
                    <input type="email" name="email" class="form-control mb-4">
                    <span style="color:red"><?php if(isset($error['email'])){ echo $error['email']; }  ?></span>

                    <label>Password</label>
                    <input type="password" name="password" class="form-control mb-4">
                    <span style="color:red"><?php if(isset($error['password'])){ echo $error['password']; }  ?></span>

                    <label>Contact</label>
                    <input type="number" name="contact" class="form-control mb-4">
                    <span style="color:red"><?php if(isset($error['contact'])){ echo $error['contact']; }  ?></span>

                    <input type="submit" name="submitBtn"/>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>