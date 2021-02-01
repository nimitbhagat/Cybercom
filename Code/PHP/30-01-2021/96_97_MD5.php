<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $string = "Nimit";
    //echo md5($string);

    if (isset($_POST['txtPass']) && !empty($_POST['txtPass'])) {
        $pass = md5($_POST['txtPass']);

        $filename = "hash.txt";
        $handle = fopen($filename, 'r');

        $fPass = fread($handle, filesize($filename));

        if ($fPass == $pass) {
            echo ("Login Successful");
        } else {
            echo ("Login Fail");
        }
    } else {
        echo ("Please Enter Password");
    }

    ?>
    <form method="post">
        <input type="password" name="txtPass" id="txtPass">
        <input type="submit" name="btnSubmit" id="btnSubmits" value="Submit">
    </form>
</body>

</html>