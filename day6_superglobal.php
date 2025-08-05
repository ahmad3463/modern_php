<?php

if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    $name = trim($_POST['username']) ;
    $marks = $_POST['usermarks'];

    if (empty($name) || empty($marks)) {
        echo 'please fill all fields';
    } elseif (!is_numeric($marks)) {
        echo ' please add numeric value';
    } else {
        if ($marks >= 80) {
            $grade = 'A';
            $status = 'pass';
        } elseif ($marks >= 70) {
            $grade = 'B';
            $status = 'pass';
        } elseif ($marks >= 60) {
            $grade = 'C';
            $status = 'pass';
        } elseif ($marks >= 50) {
            $grade = 'D';
            $status = 'pass';
        } elseif ($marks < 50) {
            $grade = 'F';
            $status = 'Fail';
        }

        echo $name . ' ' . 'Marks :' . $marks . ' ' . 'Grade : ' . $grade . ' Status : ' . $status;
    }
}
// if (isset($_POST)) {
//     $name = $_POST['username'];
//     $marks = $_POST['usermarks'];



//     if ($marks >= 80) {
//         $grade = 'A';
//         $status = 'pass';
//     } elseif ($marks >= 70) {
//         $grade = 'B';
//         $status = 'pass';
//     } elseif ($marks >= 60) {
//         $grade = 'C';
//         $status = 'pass';
//     }elseif ($marks >= 50) {
//         $grade = 'D';
//         $status = 'pass';
//     }elseif ($marks < 50) {
//         $grade = 'F';
//         $status = 'Fail';
//     }

//         echo $name.' '.'Marks :'.$marks.' '.'Grade : '.$grade.' Status : '.$status;

// }


?>