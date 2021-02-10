<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        textarea {
            resize: vertical;
        }
    </style>

</head>
<?php
session_start();
session_unset();
$msg = "";

if (isset($_POST['btnRegister'])) {

    if (isset($_POST['chkTC']) && isset($_POST['ddlPrefix']) && isset($_POST['txtfName']) && isset($_POST['txtlName']) && isset($_POST['txtEmail']) && isset($_POST['txtPhone']) && isset($_POST['txtPassword']) && isset($_POST['txtCPassword']) && isset($_POST['txtInfo'])) {
        if (!empty($_POST['chkTC']) && !empty($_POST['ddlPrefix']) && !empty($_POST['txtfName']) && !empty($_POST['txtlName']) && !empty($_POST['txtEmail']) && !empty($_POST['txtPhone']) && !empty($_POST['txtPassword']) && !empty($_POST['txtCPassword']) && !empty($_POST['txtInfo'])) {
            if ($_POST['txtPassword'] == $_POST['txtCPassword']) {
                require_once('database/database.php');

                $database = new DatabaseConnection();

                $result = $database->register($_POST['ddlPrefix'], $_POST['txtfName'], $_POST['txtlName'], $_POST['txtEmail'], $_POST['txtPhone'], $_POST['txtPassword'], $_POST['txtInfo']);

                if ($result[0]) {
                    $data = $database->login($_POST['txtEmail'], $_POST['txtPassword']);
                    if ($data) {
                        $_SESSION['id'] = $result['id'];
                        $_SESSION['name'] = $result['email'];
                        //header("location:dashboard.php");
                    }
                } else {
                    $msg = $result[1];
                }
            } else {
                $msg = "Passwords Do Not Match.";
            }
        } else {
            print_r($_POST);
            print_r($_POST['chkTC']);
            $msg = "Please Accept Terms & Condition.";
        }
    } else {

        $msg = "Please Fill All The Details And Accpet T&C.";
    }
}
?>

<body>
    <div class="container">
        <br>
        <div class="col-md-2"></div>
        <div class="form-row col-md-8">
            <div class="form-group col-md-12">
                <div class="col-md-3"></div>
                <img src="image/logo.png" alt="Logo" class="img-rounded col-md-6">
                <div class="col-md-3"></div>
            </div>
            <div class="form-group col-md-12">
                <h3 class="text-center">REGISTER</h3>
            </div>
            <form action="" method="post" id="registerForm">
                <div class="form-group col-md-2">
                    <label for="ddlPrefix">Prefix</label>
                    <select name="ddlPrefix" id="ddlPrefix" class="form-control" required>
                        <option selected disabled>Select Prefix</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="txtfName">First Name</label>
                    <input type="text" class="form-control" name="txtfName" id="txtfName" placeholder="First Name" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="txtlName">Last Name</label>
                    <input type="text" class="form-control" name="txtlName" id="txtlName" placeholder="Last Name" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="txtEmail">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="txtPhone">Mobile Number</label>
                    <input type="tel" class="form-control" name="txtPhone" id="txtPhone" placeholder="Mobile Number" required maxlength="10" minlength="10">
                </div>

                <div class="form-group col-md-6">
                    <label for="txtPassword">Password</label>
                    <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required maxlength="32" minlength="8">
                </div>

                <div class="form-group col-md-6">
                    <label for="txtCPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="txtCPassword" id="txtCPassword" placeholder="Confirm Password" required maxlength="32" minlength="8">
                </div>

                <div class="form-group col-md-12">
                    <label for="txtInfo">Information</label>
                    <textarea name="txtInfo" id="txtInfo" class="form-control" placeholder="Information" maxlength="255"></textarea>
                </div>

                <div class="col-md-12">
                    <input type="checkbox" value="true" class="text-left" name="chkTC" id="chkTC" required>
                    <label for="checkbox">Hereby, I Accept Terms & Conditions.</label>
                </div>

                <div class="col-md-12">
                    <p class="text-center danger text-danger" id="msg"><?php echo $msg; ?></p>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" name="btnRegister" id="btnRegister" class="btn btn-primary form-control" onclick="registerValidation();">REGISTER</button>
                </div>

                <div class="form-group col-md-6">
                    <a href="index.php" class="btn btn-primary form-control col-md-6">Already A User?</a>
                </div>

            </form>


        </div>
        <div class="col-md-2"></div>
    </div>
    <script src="js/javascript.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>