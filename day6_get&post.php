<?php
// Greet user using GET parameter
if (isset($_GET['student']) && !empty($_GET['student'])) {
    $student = htmlspecialchars($_GET['student']);
    echo "<h3>Welcome, $student!</h3>";
} else {
    echo "<h3>Welcome, Guest!</h3>";
}
?>


<form action="" method="POST">
    <input type="text" name="username"  placeholder="Enter your name"><br><br>
    <input type="text" name="usermarks"  placeholder="Enter your marks"><br><br>
    <button>submit</button>
</form>

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



?>