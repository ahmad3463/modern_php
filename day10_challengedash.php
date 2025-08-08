<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: day10_challenge.php');
    exit;
}

echo "Welcome, " . $_SESSION['username'];

?>