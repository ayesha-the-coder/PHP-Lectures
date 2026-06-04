<?php
// Session Example # 01 
session_start();

// $_SESSION['username'] = "Ali khan";
// echo $_SESSION['username'];

// Session Example # 02

if(isset($_SESSION['user'])){
    header('Location: welcome.php');
}

$correct_name = 'student';
$correct_pass = '1234';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if($username == $correct_name  &&  $pass == $correct_pass){
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit;
    }
    else{
       $error = "Invaild username or password";
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"> 
</head>
<body>
    <?php if(isset($error)) echo "<p style='color: red;'>$error</p>" ?>
   <div class="container">
    <h1 class="text-center">Login Form</h1>
    <div class="row">
            <div class="col-4 mx-auto">
                <form action="" method="post">
                    Username: <input type="text" name="username" class="form-control" placeholder="Enter Your Name">
                    Passsword: <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                    <button type="submit" class="btn btn-dark w-100 mt-3"  >Submit</button>
                </form>
            </div>
    </div>
   </div>
    
</body>
</html>

<!-- Create a login form using POST that checks if the username is "admin" and the password is "1234". If correct, display an alert saying "Login Successfully" and show the username. Otherwise, show an alert saying "Invalid username or password". -->
<form method="POST" action="">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === 'admin' && $pass === '1234') {
       echo "<script> alert('Login Successfully..') </script>";
       echo $_POST['username']; 
    } else {
       echo "<script>alert('Invalid username or password')</script>";
    }
}
?>














































<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "Name: " . ($_POST['name']) . "<br>";
//     echo "Email: " . ($_POST['email']) . "<br>";
//     echo "Message: " . (($_POST['message'])) . "<br>";
// }



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $file = $_FILES['pdf'];
//     $fileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

//     if ($fileType !== 'pdf') {
//         echo "Only PDF files are allowed.";
//     } elseif ($file['size'] > 2 * 1024 * 1024) {
//         echo "File size should be less than 2MB.";
//     } else {
//         move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
//         echo "PDF uploaded successfully!";
//     }
// }


?>


<!-- <form action="" method="POST">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Message:<br>
  <textarea name="message"></textarea><br>
  <input type="submit" value="Send">
</form> -->

<!-- <form method="POST" enctype="multipart/form-data" action="uploads.php">
  Upload PDF: <input type="file" name="pdf"><br>
  <input type="submit" value="Upload">
</form> -->


<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "Form submitted at: " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
// }
?>
<!-- 
<form method="POST">
  <input type="submit" value="Submit">
</form> -->



