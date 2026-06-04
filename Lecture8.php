<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <h1 class="text-center">Students Form</h1>
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="" method="post">
                <label>Name</label>
                <input type="text" placeholder="Enter Your Name" name="name" class="form-control mb-3">
                <label>Email</label>
                <input type="email" placeholder="Enter Your Email" name="email" class="form-control mb-3">
                <label>Password</label>
                <input type="password" placeholder="Enter Your Password" name="pass" class="form-control mb-3">
                <label>Contact</label>
                <input type="number" placeholder="Enter Your Contact" name="contact" class="form-control mb-3">
                <button class="btn btn-info" name="submit_btn">Submit</button>
            </form> 
        </div>
    </div>
</div>



<?php
// PHP GET REQUEST

//  if(isset($_GET['submit_btn'])){
//      $name = $_GET['name'];
//      $email = $_GET['email'];
//      $password = $_GET['pass'];
//      $contact = $_GET['contact'];
//         echo $_GET['name'];
    //  echo $name, $email , $password , $contact;
  
//  }

// PHP POST REQUEST

// if(isset($_POST['submit_btn'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['pass'];
//     $contact = $_POST['contact'];
//     // echo $name, $email , $password , $contact;
  
// }

// --------------------------------------------------------------------------

// PHP SERVER REQUEST

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo "This is a POST Request";
// }

// else{
//     echo "This is a GET Request";

// }

// echo "Current File: " . $_SERVER['PHP_SELF'] . "<br>";
// echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
// echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
// echo "User IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
// echo "Browser Info: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
// echo "Full path Info: " . $_SERVER['SCRIPT_FILENAME'];


?> 


