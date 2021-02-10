<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


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
                    <li class="active"><a href="manage_category.php">Manage Catagory</a></li>
                    <li><a>My Profile</a></li>
                    <li><a href="logout.php" class="btn-danger">Log Out</a></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <h1>Blog Catagory</h1>
                <hr>
                <a href="add_category.php" class="btn btn-primary">Add Category</a>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Image</th>
                                <th>Category Name</th>
                                <th>Created Date</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once('database/database.php');

                            $database = new DatabaseConnection();

                            $result = $database->selectCategory();

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><img src="" alt="<?php echo $row['title'] . ".Image" ?>"></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><?php echo $row['created_at'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                                            <button class="btn btn-danger" value="<?php echo $row['id'] ?>" onclick="deleteCategory(this);">Delete</button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="js/javascript.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
</body>

</html>