

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Php OOPs Crud</title>
</head>

<body>

    <div class="container-fluid bg-danger">
        <h1 class="text-center p-4 text-white">
            Php oops crud with ajax
        </h1>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    Students ()
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add
                    </button>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Age</td>
                                <td>City</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody id="get-data">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" id="form-data">
                        <div class="form-group">
                            <label for="">Enter Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Age</label>
                            <input type="number" name="age" id="age" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">Enter City</label>
                            <input type="text" name="city" id="city" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="save">Save</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>

</html>