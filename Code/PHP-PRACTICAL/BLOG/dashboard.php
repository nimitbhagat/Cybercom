<?php session_start();?>
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
                <h1>Blog Post</h1>
                <hr>
                <a href=""></a>

            </div>
        </div>
    </div>


</body>

</html>