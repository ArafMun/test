<?php
include "view/header.php";
session_start();

$error = "";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'yes') {
    header("Location: view/home.php");
}

?>

<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Log in to Bondstein Technical Test</h3>
            <div class="card-text">

                <?php if ($error != '') { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"><?= ($error) ? $error : ""; ?></div>
                <?php } ?>
                <form action="task" method="post" id="login_form">
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Login ID</label>
                        <input type="text" class="form-control form-control-sm" aria-describedby="emailHelp" name="login_id" id="login_id" required>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="login_id_error" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" id="password" required>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="password_error" style="display: none;"></div>
                    </div>
                    <input type="submit" value="Submit" name="btnSubmit" class="btn btn-primary btn-block" id="submit_btn">
                </form>
                <?php
                function login()
                {
                    if (!isset($_POST['login_id']) || $_POST['login_id'] == "") {
                        $error = "<span style='color:red'>Please give login id!</span>";
                        echo '<br>' . $error;
                        die();
                    } else if (!isset($_POST['password']) || $_POST['password'] == "") {
                        $error = "<span style='color:red'>Please give password!</span>";
                        echo '<br>' . $error;
                        die();
                    } else {
                        // include "dbConnect.php";
                        $login_id = $_POST['login_id'];
                        $password = $_POST['password'];
                        $md5_password = md5($password);

                        $db = mysqli_connect('localhost', 'root', '', 'test') or die('Not Connected');
                        mysqli_set_charset($db, 'utf8');

                        $sql = mysqli_query($db, "SELECT * FROM users WHERE login_id = '{$login_id}' AND password = '{$md5_password}'");
                        $sql = mysqli_fetch_assoc($sql);
                        $id = $sql['id'];

                        if ($id != null) {

                            echo '<span style="color:green">Your are logged in</span>';
                            // if ($sql['category'] == 'Admin') {
                            $_SESSION['login_id'] = $sql['login_id'];
                            $_SESSION['category'] = $sql['category'];
                            $_SESSION['logged_in'] = 'yes';

                            $cookie_name = "login_id";
                            $cookie_value = $sql['login_id'];
                            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                            header("Location: view/home.php");
                            // }
                        } else {

                            echo '<span style="color:red">Login ID or Password is incorrect!</span>';
                        }
                    }
                }
                if (isset($_POST['btnSubmit'])) {
                    login();
                }

                ?>
            </div>
        </div>
    </div>
</div>
<?php include "view/footer.php"; ?>