<?php
// Check agar cookie set hai
if (!isset($_COOKIE['username'])) {
    // Cookie nahi set, to login page pe bhejo
    header("Location: login.php");
    exit();
}

// Cookie se username get karo
$username = $_COOKIE['username'];
?>

<h2>Welcome, <?php echo $username; ?>!</h2>
<a href="logout.php">Logout</a>
