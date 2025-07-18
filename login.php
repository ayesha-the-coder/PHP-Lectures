<?php
//database connection
$conn = mysqli_connect("localhost", "root", "", "db_crud");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check from DB
    $result = mysqli_query($conn, "SELECT * FROM tbcookie WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($result) == 1) {
        // Agar Remember Me check kiya gaya ho
        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + (60)); 
        } else {
            // Agar remember me select nahi kia, cookie remove karo (safety)
            setcookie("username", "", time() - 120);
        }

        // Redirect to welcome
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

<!-- Simple Login Form -->
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="checkbox" name="remember"> Remember Me <br><br>
    <input type="submit" name="login" value="Login">
</form>
