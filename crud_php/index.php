<?php include 'conn.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['message'])) : ?>
                    <h6 class="alert alert-success"> <?= $_SESSION['message']?></h6>
                    <?php session_unset()?>
                    <?php endif?>
                <div class="card  ">
                    <div class="card-head  ">
                        <h1>Crud PDO

                            <a href="add-student.php" class="btn btn-primary float-end"> Add Student</a>
                        </h1>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $query = "SELECT * FROM students";
                            $statment = $conn->prepare($query);
                            $statment->execute();
                             
                            $results = $statment->fetchAll(PDO::FETCH_OBJ);

                            if($results){
                                foreach($results as $result){
                                    ?>
                                    <tr>
                                        <td><?= $result->ID?></td>
                                        <td><?= $result->name?></td>
                                        <td><?= $result->email?></td>
                                        <td><?= $result->phone?></td>
                                        <td><?= $result->course?></td>
                                        <td><a href="student-edit.php?id=<?= $result->ID?>" class="btn btn-primary"> Edit</a></td>
                                        <td>
                                            <form action="edit-code.php" method="POST">
                                              <button type="submit" class="btn btn-danger" name="delete_student" value="<?= $result->ID ?>" >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                    <tr colspan="5">
                                        <td>Result Not Found</td>
                                    </tr>

                                <?php
                                
                            };

                            ?>
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>