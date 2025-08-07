
<?php
session_start();
 if(!isset($_SESSION['user'])){
    header('Location: day10_sessions.php');
 }
 echo "<h1>wellcome " . $_SESSION['user'] ."!</h1>"
?>
<a href="day10_logout.php">logout</a>