<?php
// Cookie delete karo
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 120); // Cookie expire karo
}

header("Location: login.php");
exit();
