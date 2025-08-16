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
                <div class="card  ">
                    <div class="card-head  ">
                        <h1>Crud PDO

                            <a href="index.php" class="btn btn-primary float-end"> view table</a>
                        </h1>

                    </div>

                    <div class="card-body">
                        <form action="codee.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">student Name</label>
                                <input type="name" class="form-control" name="stdName" >
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">email</label>
                                <input type="email" class="form-control" name="stdEmail" >
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">phone</label>
                                <input type="phone" class="form-control" name="stdPhone" >
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <input type="Course" class="form-control" name="stdCourse" >
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>