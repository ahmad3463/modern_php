<?php
session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username']; // restore from cookie
}

if (!isset($_SESSION['username'])) {
    header('Location: day10_challenge.php');
    exit;
}

echo "Welcome, " . $_SESSION['username'];

?>
<br><br>
<a href="day10_logoutdash.php">logout</a>
