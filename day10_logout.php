<?php
session_start();
session_destroy();
header('Location: day10_sessions.php');
exit;
?>