
<?php
        session_start();
        // $validUserName = 'ahmad';
        // $validUserPassword = '123';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userName = $_POST['username'];
        $userPassword =  $_POST['userpassword'];
        $timestamp = date('d/m/y');

        if($userName  && $userPassword){
            $_SESSION['user'] = $userName;
            $_SESSION['userdate'] = $timestamp;

            $file = fopen('logins.txt' , 'a');
            fwrite($file , "User : $userName login in at $timestamp\n");
            fclose($file);
            header('Location: day10_dashboard.php');
            exit;
        }else{
            $error = 'please enter both user name and password';
        }

        
    }

?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <input type="password"  name="userpassword" placeholder="Enter your password"><br><br>
    <button type="submit">Submit</button>
</form>

    <?php if(isset($error)) :?>

        <p style="color:red;"> <?= $error?></p>
        
        <?php endif ?>
