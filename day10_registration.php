<h1>Registratin page</h1>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <input type="password" name="userpassword" placeholder="Enter your name"><br><br>
    <button type="submit"> submit </button>
</form>
<a href="day10_challenge.php">login</a><br><br>


<?php
if ($_POST) {
    $userName = trim($_POST['username']);
    $userPassword = trim($_POST['userpassword']);
    $newuser = $userName . "," . $userPassword;

    $files = file('user.txt');
    $exists = false;

    foreach ($files as $file) {
        if (trim($file) === trim($newuser)) {
            $exists = true;
            break;
        }
    }

    if($exists){
        echo 'user exist already';
    }else{
        file_put_contents('user.txt', $newuser , FILE_APPEND);
        echo 'register successfully';
    }
}
?>