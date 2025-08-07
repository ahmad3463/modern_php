<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userName = $_POST['username'];
        $userComments = $_POST['usercomment'];
        $timestamp = date('D-M-Y');

        $combine = $userName. ' '. $userComments . '[' . $timestamp . ']' . "\n";

        if(empty($userName) && empty($userComments)){
            echo 'please add a valid';
        }else{

            $file = fopen('data.txt', 'a');
            fwrite($file,$combine );
            fclose($file);
    
            
            header('Location: day9_files.php');
            exit;
        }

        if(isset($_GET['sucess'])){
            echo 'Form submitted Successfully';
        }

    }
    $data = file('data.txt');
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <textarea name="usercomment" id=""></textarea><br><br>
    <button type="submit">submit</button>
</form>

<ul>
    <?php 
    foreach($data as $item) :     
    ?>

    <li><?= $item ?></li>



<?php endforeach ?>
</ul>

