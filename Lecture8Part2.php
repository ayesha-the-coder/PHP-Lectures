<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container">
    <h1 class="text-center">Student Form</h1>
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image" class="form-control mb-3">
                <button class="btn btn-dark w-100" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php

if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tem = $_FILES['image']['tmp_name'];

    if(move_uploaded_file($file_tem,"upload_file/".$file_name)){
        echo "<script>alert('File uploaded Successfully')</script>";
        
    }
    else{
        echo "Not Uploaded";
    }
}

//PHP GET Request

// if(isset($_GET['submit'])){
    //     $name = $_GET['name'];
    //     $email = $_GET['email'];
//     $pass = $_GET['password'];
//     $contatc = $_GET['contact'];
//     // echo $name, $email,$pass,$contatc;

// }

//PHP Post Request

// if(isset($_POST['submit'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $pass = $_POST['password'];
    //     $contatc = $_POST['contact'];
    
    //     // echo $name, $email,$pass,$contatc;
    
    // }
    
    //PHP Server Request

    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     echo "This is a POST Request";
    // }
    // else{
    //        echo "This is a GET Request";

    // }
    
    
    // echo "Current File: " .$_SERVER['PHP_SELF'] . "<br>";
    // echo "Server Name: " .$_SERVER['SERVER_NAME']. "<br>";
    // echo "Request Method: " .$_SERVER['REQUEST_METHOD']. "<br>";
    // echo "Uder IP: " .$_SERVER['REMOTE_ADDR']. "<br>";
    // echo "Browser Info: " .$_SERVER['HTTP_USER_AGENT']. "<br>";
    // echo "Full Path: " .$_SERVER['SCRIPT_FILENAME']. "<br>";
    ?>
    /////////////////////////////////////////////////////////////////////////////////

//     Q2: Create a PHP form that collects Name, Email, and a Profile Picture from the user.
// On form submission, upload the image and display the user’s data along with the uploaded image in a Bootstrap-styled table on the same page. -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
</div>

    
