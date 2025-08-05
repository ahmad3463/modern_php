<!-- Extra Challenge (Mini-Project)
Now that you know arrays + loops, you can make a Student Report Table (name, marks, grade):

Store students in a multi-dimensional array.

Use a loop to print their info in an HTML table.

Use if/elseif to calculate Grade (A, B, C, etc.) based on marks. -->

<h1> Student Report Table</h1>
<?php

$studentReports = [
    ['Ahmad', 80],
    ['Ali', 70],
    ['Saad', 60],
    ['noor', 40]

];



?>

<table border="1">
    <tr>
        <td>name</td>
        <td>marks</td>
        <td>Grade</td>
        <td>Status</td>
    </tr>
    <?php foreach ($studentReports as $report): ?>
      
            <?php 
                $name = $report[0];
                $marks = $report[1];

                if ($marks >= 80) {
                    $grade = 'A';
                    $status = 'pass';
                }elseif($marks >= 70){
                    $grade = 'B';
                    $status = 'pass';
                }elseif ($marks >= 60) {
                    $grade = 'C';
                    $status = 'pass';
                }else{
                    $grade = 'D';
                    $status = 'fail';
                }
                
                //   if ($marks < 40) {
                //     $status = 'pass';
                // }else{
                //     $status = "fail";
                // }
                ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $marks?></td>
                <td><?= $grade ?></td>
                <td><?= $status ?></td>
            </tr>
      
    <?php endforeach ?>
</table>