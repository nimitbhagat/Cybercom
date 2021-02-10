<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if (!isset($_SESSION['id'])) {
        header('location:index.php');
    }
    $msg = "";

    if (isset($_POST['btnRegister'])) {

        if (isset($_POST['txtTitle']) && isset($_POST['txtContent']) && isset($_POST['txtUrl']) && isset($_POST['txtMeta']) && isset($_POST['ddlPid'])) {

            if ($msg = isset($_FILES['filePhoto']['name'])) {
                $msg = "Bdone";
                $dir = "image/category_image/";
                $name = $_FILES['filePhoto']['name'];
                $type = $_FILES['filePhoto']['type'];
                $tmp_name = $_FILES['filePhoto']['tmp_name'];

                $extension = strtolower(substr($name, strpos($name, '.') + 1));

                echo ("<BR><BR><BR>");
                if (!empty($name)) {
                    if (($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" || $type == "png") {

                        require_once('database/database.php');

                        $database = new DatabaseConnection();

                        $database->insertCategory($_SESSION['id'], $_POST['ddlPid'], $_POST['txtTitle'], $_POST['txtMeta'], $_POST['txtUrl'], $_POST['txtContent']);

                        if (move_uploaded_file($tmp_name, $dir . $name)) {
                            $msg = "Uploded to " . $dir . $name;
                        } else {
                            die("Error");
                        }
                    } else {
                        $msg =  "File Must Be JPEG/JPG/PNG";
                    }
                } else {
                    $msg = "Choose A File";
                }
            }
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h4>Cybercom Creation Blog</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="manage_category.php">Manage Catagory</a></li>
                    <li><a>My Profile</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <h1>Add Catagory</h1>
                <hr>
                <div class="form-row col-md-6">
                    <form action="" method="post" id="registerForm" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <label for="txtTitle">Title</label>
                            <input type="text" class="form-control" name="txtTitle" id="txtTitle" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="txtContent">Content</label>
                            <textarea class="form-control" name="txtContent" id="txtContent"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="txtUrl">URL</label>
                            <input type="text" class="form-control" name="txtUrl" id="txtUrl" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="txtMeta">Meta Title</label>
                            <input type="text" class="form-control" name="txtMeta" id="txtMeta" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="ddlPid">Parent Category</label>
                            <select name="ddlPid" id="ddlPid" class="form-control" required>
                                <option value="0" selected disabled>Select Parent ID</option>
                                <?php

                                require_once('database/database.php');

                                $database = new DatabaseConnection();


                                if ($result = $database->categoryId()) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                                <?php
                                    }
                                }


                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="filePhoto">Meta Title</label>
                            <input type="file" class="form-control" name="filePhoto" id="filePhoto" required>
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

            </div>
        </div>
    </div>


</body>

</html>