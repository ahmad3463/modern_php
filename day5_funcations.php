<?php

// Make a function calculatePercentage($marksObtained, $totalMarks)

    function calculatePrecentage ($obtainMarks , $totalMarks){

        $precentage = ($obtainMarks / $totalMarks) * 100;
        return $precentage;
    }

    $marks = 600;
    $totalmarks  = 1100;

    echo calculatePrecentage($marks , $totalmarks);


    echo '<br>';
    echo '<br>';
    echo '<br>';


    // Make a function isPassed($marks) → returns true or false


    function isPassed($marks){
        if($marks >= 80){
            return true;
        }else{
            return false;
        }
    }
    $marks = 90;

    var_dump(isPassed($marks));

    echo '<br>';
    echo '<br>';
    echo '<br>';

    // Make a function printStudentReport($name, $marks) → prints full line with grade and pass/fail

    function printStudentReport($name , $marks){

            if($marks >= 80){
                $grade = 'A';
                $status = 'pass';
            }elseif($marks >= 60){
                $grade = 'B';
                $status = 'pass';
            }else{
                $grade = 'C';
                $status = 'fail';
            }
            $total = $name.' '. "Marks :".$marks.' '. "Grade :".$grade.' '. "status :".$status;
            return $total;       
  
    };

    $name = 'Ahmad';
    $marks = 50;
    echo printStudentReport($name,$marks);
?>