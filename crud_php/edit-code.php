<?php
include 'conn.php';

if($_POST){
    $delete_student = $_POST['delete_student'];

    try {
            $query = "DELETE  FROM students WHERE ID=:std_id";
            $statment = $conn->prepare($query);
            $statment->execute([':std_id' => $delete_student]);

            if($statment){
                $_SESSION['message'] = "deleted Successfully";
                header('Location: index.php');
                exit;
            }
    
    } catch (PDOException $e) {
        echo "not Deleted" . $e->getMessage();
    }
}



if ($_POST) {
    $stdID = $_POST['stdID'];
    $stdName = $_POST['stdName'];
    $stdEmail = $_POST['stdEmail'];
    $stdPhone = $_POST['stdPhone'];
    $stdCourse = $_POST['stdCourse'];

    try {
        $query = "UPDATE students SET name=:std_name, email=:std_email , phone=:std_phone , course=:std_course Where ID=:std_id";
        $statment = $conn->prepare($query);
        $data = [
            ':std_id' => $stdID,
            ':std_name' => $stdName,
            ':std_email' => $stdEmail,
            ':std_phone' => $stdPhone,
            ':std_course' => $stdCourse
        ];

        $results = $statment->execute($data);

        if ($results) {
            $_SESSION['message'] = "updated Successfully";
            header('Location: index.php');
            exit;
        } else {
            $_SESSION['message'] = "Not Updated";
            header('Location: index.php');
            exit;
        }

    } catch (PDOException $e) {
        echo "Not Updated" . $e->getMessage();
    }
}




?>