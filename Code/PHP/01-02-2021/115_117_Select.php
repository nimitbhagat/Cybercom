<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function executeQuery($table, $element, $value, $con)
    {
        $query = "select * from $table where $element like '%$value%'";
        if ($a = mysqli_query($con, $query)) {
            if (mysqli_num_rows($a) != 0) {
                while ($row = mysqli_fetch_assoc($a)) {
                    echo $row['username'] . "   :   <b>" . $row['password'] . "</b><br>";
                }
            } else {
                echo ("No Data Found");
            }
        } else {
            echo (mysqli_error($con));
        }
    }


    $value = "";
    include('database.php');
    if (isset($_POST['txtValue'])) {
        $value = $_POST['txtValue'];
        executeQuery('users', 'username', $value, $con);
    }

    
    ?>
    <hr>
    <form method="post">
        <input type="text" name="txtValue" id="txtValue" value="<?php echo $value; ?>">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Search">
    </form>

</body>

</html>