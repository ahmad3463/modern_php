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
                </div>
            </div>
        </div>

    </div>

</body>

</html>