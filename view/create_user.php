<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bondsten Task</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">


</head>

<body>

    <div class="testbox">
        <section>
            <div class="container">
                <form action="create_user.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                            <div class="row">
                                <div class="col text-center">
                                    <h1>Create New user</h1>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-lg btn-primary" type="button"><a href="../task.php" style="color: white;"> login</a></button>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Login ID" name="login_id" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label mt-4">Category</label>
                                    <select class="form-select" name="category" required>
                                        <option value="">select</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Customer">Customer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-start mt-4">
                                <div class="col">
                                    <input type="submit" value="Register" name="btnSubmit" class="btn btn-primary mt-4" id="submit_btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <?php
        function login()
        {
            if (!isset($_POST['name']) || $_POST['name'] == "") {
                $error = "<span style='color:red'>Please give name!</span>";
                echo '<br>' . $error;
                die();
            } else if (!isset($_POST['login_id']) || $_POST['login_id'] == "") {
                $error = "<span style='color:red'>Please give login id!</span>";
                echo '<br>' . $error;
                die();
            } else if (!isset($_POST['password']) || $_POST['password'] == "") {
                $error = "<span style='color:red'>Please give password!</span>";
                echo '<br>' . $error;
                die();
            } else if (!isset($_POST['confirm_password']) || $_POST['confirm_password'] == "") {
                $error = "<span style='color:red'>Please give confirm password!</span>";
                echo '<br>' . $error;
                die();
            } else if (!isset($_POST['category']) || $_POST['category'] == "") {
                $error = "<span style='color:red'>Please select category!</span>!";
                echo '<br>' . $error;
                die();
            } else {
                // include "dbConnect.php";
                $name = $_POST['name'];
                $login_id = $_POST['login_id'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $category = $_POST['category'];
                $md5_password = md5($password);

                $db = mysqli_connect('localhost', 'root', '', 'test') or die('Not Connected');
                mysqli_set_charset($db, 'utf8');

                $sql = mysqli_query($db, "SELECT * FROM users WHERE login_id = '{$login_id}'");
                $sql = mysqli_fetch_assoc($sql);
                $id = $sql['id'];

                if ($id != null) {
                    echo "<span style='color:red'>$login_id user id already exits!<span>";
                    die();
                } else {
                    $sql = "INSERT INTO users (name, logIn_id, password)
                    VALUES ('$name', '$login_id', '$md5_password')";

                    if ($db->query($sql) === TRUE) {
                        echo "New user created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
            }
        }
        if (isset($_POST['btnSubmit'])) {
            login();
        }

        ?>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
<script>
    $("#submit_btn").click(function(e) {
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        if (password != confirm_password) {
            alert("Password dosen't match!");
            e.preventDefault();
            return false;
        }
    });
</script>

</html>