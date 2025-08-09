<h1>Login Form</h1>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <input type="password" name="userpassword" placeholder="Enter your password"><br><br>
    <button type="submit">Submit</button>
</form>
<a href="day10_registration.php">registor now</a>

<?php
session_start();

if ($_POST) {
    $userName = $_POST['username'];
    $userPass = $_POST['userpassword'];

    $combine = $userName . "," . $userPass;

    $counts = file('user.txt');
    $found  = false;

    foreach ($counts as $count) {
        if (trim($count) === trim($combine)) { // trim to avoid newline issues
            $_SESSION['username'] = $userName;
            $found = true;
            break;
        }
    }

    if ($found) {
        setcookie('username' , $userName , time() + 3600);
        header('Location: day10_challengedash.php');
        exit; // stop further code after redirect
    } else {
        echo 'Invalid credentials';
    }
}
?>
