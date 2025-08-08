<?php
session_start();

if (!isset($_SESSION['user'])) {
   header('Location: day10_sessions.php');
   exit; 
}
$user = $_SESSION['user'];
$userDate = $_SESSION['userdate'];


$loginCount = 0;
$filename = 'logins.txt';

if (file_exists($filename)) {
   $counts = file($filename);

   foreach($counts as $count){
      if (str_contains($count, "User : $user")){
         $loginCount++;
      }
   }
}

?>

<h1>wellcome <?= $user?></h1>
<p>login on at <?= $userDate?></p>
<p>logins : <?= $loginCount?></p>
<a href="day10_logout.php">logout</a>