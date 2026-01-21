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
    
</body>
</html>