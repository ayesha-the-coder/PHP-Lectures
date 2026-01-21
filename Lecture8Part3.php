<?php
// echo "<b>Current File Name</b> : ".$_SERVER['PHP_SELF']. "<br>";
// echo "<b>Server Name</b> : ".$_SERVER['SERVER_NAME']. "<br>";
// echo "<b>Request Method</b> : ".$_SERVER['REQUEST_METHOD']. "<br>";
// echo "<b>Your IP Address</b> : ".$_SERVER['REMOTE_ADDR']. "<br>";
// echo "<b>Brower Info</b> : ".$_SERVER['HTTP_USER_AGENT']. "<br>";
// echo "<b>Full Path</b> : ".$_SERVER['SCRIPT_FILENAME']. "<br>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "This is a Get Method";
}
else{
    echo "This is a Post Method";
}

// if(isset($_FILES['myfile'])){
//     // echo "<pre>";
//     // var_dump($_FILES);
//     // echo "</pre>";

//    $file_name =  $_FILES['myfile']['name'];
//    $file_size = $_FILES['myfile']['size'];
//    $file_tmp = $_FILES['myfile']['tmp_name'];
//    $file_type = $_FILES['myfile']['type'];

//    if(move_uploaded_file($file_tmp,"upload/".$file_name)){
//     echo "<script>alert('File Upload Successfully..')</script>";
//    }
//    else{
//     echo "<script>alert('Could Not Upload File..')</script>";
//    }
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <br><br>
        <input type="submit" >
    </form>

  <!-- ---------------Lecture8 Part3 Task Code -->
    <!-- Q2: Create a PHP form that collects Name, Email, and a Profile Picture from the user.
On form submission, upload the image and display the user’s data along with the uploaded image in a Bootstrap-styled table on the same page. -->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1 class="text-center mb-4">Student Form</h1>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Enter your name" class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Enter your email" class="form-control mb-3" required>
                <input type="file" name="filesss" class="form-control mb-3" required>
                <button class="btn btn-dark w-100" name="submit">Submit</button>
            </form>
        </div>
    </div>  
    <?php
    if (isset($_POST['submit'])) {
        $name = ($_POST['name']);
        $email = ($_POST['email']);

        $file_name = $_FILES['filesss']['name'];
        $file_tmp = $_FILES['filesss']['tmp_name'];
        
        if (move_uploaded_file($file_tmp,"upload_file/".$file_name)) {
            echo "<div class='row mt-5'>
            <div class='col-md-8 mx-auto'>
            <h3 class='text-center mb-3'>Student Info</h3>
            <table class='table table-bordered text-center'>
                            <thead class='table-dark'>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Profile Picture</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>$name</td>
                                    <td>$email</td>
                                    <td><img src='upload_file/$file_name' width='80'></td>
                                   
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>";
                                } else {
                                    echo "<div class='alert alert-danger mt-3 text-center'>File Upload Failed!</div>";
                                }
    }
    ?>
</div> -->

    
</body>
</html>