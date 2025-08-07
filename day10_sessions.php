
<?php
        session_start();
        $validUserName = 'ahmad';
        $validUserPassword = '123';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userName = $_POST['username'];
        $userPassword =  $_POST['userpassword'];

        if($userName === $validUserName && $userPassword === $validUserPassword){
            $_SESSION['user'] = $userName;
            header('Location: day10_dashboard.php');
            exit;
        }else{
            $error = 'enter a wrong user name';
        }

        
    }

?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <input type="password"  name="userpassword" placeholder="Enter your password"><br><br>
    <button type="subit">Submit</button>
</form>

    <?php if(isset($error)) :?>

        <p style="color:red;"> <?= $error?></p>
        
        <?php endif ?>
