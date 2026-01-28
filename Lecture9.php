<?php
 session_start();

// Simple Session Example
//  $_SESSION['username'] = "Ali";
//  echo $_SESSION['username'];

if(isset($_SESSION['user'])){
     header("Location:dashboard9.php");
        exit;
}

$correct_username = "students";
$correct_password = 12345;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $userpassword = $_POST['pass'];

    if($username == $correct_username && $userpassword == $correct_password){
        $_SESSION['user'] = $username;
        header("Location:dashboard9.php");
        exit;
    }
    else{
        $error =  "Invalid Username and Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    if(isset($error))
        echo "<p style='color:red;'>$error</p>";
    
    
    ?>
    <div class="container">
        <h2 class="text-center mt-4">Login Page</h2>
        <div class="row">
            <div class="col-4 mx-auto shadow-none p-5 mb-5 mt-3 bg-body-tertiary rounded">
                <form action="#" method="post">
                    <label for="">UserName</label>
                    <input type="text" placeholder="Enter Your Name" name="username" class="form-control mb-4">

                     <label for="">Password</label>
                    <input type="password" placeholder="Enter Your Password" name="pass" class="form-control">

                    <button type="submit" class="btn btn-danger w-100 mt-4">Login</button>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>