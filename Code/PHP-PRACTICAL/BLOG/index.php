<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php
session_start();
$msg = "";
if (isset($_SESSION['id'])) {
    header("location:dashboard.php");
} else {
    if (isset($_POST['btnLogin'])) {
        if (isset($_POST['txtEmail']) && isset($_POST['txtPassword'])) {
            if (!empty($_POST['txtEmail']) && !empty($_POST['txtPassword'])) {
                require_once('database/database.php');

                $database = new DatabaseConnection();

                $result = $database->login($_POST['txtEmail'], $_POST['txtPassword']);
                if ($result) {
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['name'] = $result['email'];
                    header("location:dashboard.php");
                }
            } else {
                $msg = "Please Fill All The Details";
            }
        } else {
            $msg = "Please Fill All The Details";
        }
    }
}
?>

<body>
    <div class="container">
        <br>
        <div class="col-md-4"></div>
        <div class="form-row col-md-4">
            <div class="form-group col-md-12">
                <div class="col-md-1"></div>
                <img src="image/logo.png" alt="Logo" class="img-rounded col-md-10">
                <div class="col-md-1"></div>
            </div>
            <div class="form-group col-md-12">
                <h3 class="text-center">LOGIN</h3>
            </div>
            <form action="index.php" method="post" id="loginForm">
                <div class="form-group col-md-12">
                    <label for="txtEmail">EMAIL</label>
                    <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="EMAIL" autocomplete="off" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="txtPassword">PASSWORD</label>
                    <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="PASSWORD" required>
                </div>
                <div class="col-md-12">
                    <p class="text-center danger text-danger" id="msg"><?php echo $msg; ?></p>
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary form-control" onclick="loginValidation()">LOGIN</button>

                </div>
                <div class="form-group col-md-6">
                    <a href="register.php" class="btn btn-primary form-control">REGISTER</a>
                </div>
            </form>


        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="js/javascript.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>