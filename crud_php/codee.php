<?php
include "conn.php";
        if($_POST){
        $stdName   = $_POST['stdName'];
          $stdEmail  = $_POST['stdEmail'];
           $stdPhone  =$_POST['stdPhone'];
            $stdCourse = $_POST['stdCourse'];
        }

        $query = "INSERT INTO students ( name, email, phone, course )  values (:stdName , :stdEmail , :stdPhone ,  :stdCourse )";
        $query_run = $conn->prepare($query);

        $data = [
                ':stdName' => $stdName,
                ':stdEmail' => $stdEmail,
                ':stdPhone' => $stdPhone,
                ':stdCourse' => $stdCourse
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute){
                $_SESSION['message'] = "inserted Successfully";
                header('Location: index.php');
                exit;
        }else{
                $_SESSION['message'] = "not inserted ";
                header('Location: index.php');
                exit;
        }

?>