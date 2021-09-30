<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bondsten Task</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
        html,
        body {
            height: 100%;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .card-title {
            font-weight: 300;
        }

        .btn {
            font-size: 14px;
            margin-top: 20px;
        }


        .login-form {
            width: 330px;
            margin: 20px;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0 0;
        }

        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }

        input:focus {
            background-color: red;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="create_user.php">Create User
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Wellcome Admin!</strong> You successfully logged in <a href="#" class="alert-link"></a>.
    </div>
    <br>
    <br>
    <br>
    <div class="d-grid gap-2">
        <button class="btn btn-lg btn-primary" type="button"><a href="create_user.php" style="color: white;"> Create New User</a></button>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>