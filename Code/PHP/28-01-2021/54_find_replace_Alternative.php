<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $input = "";
    $search = [""];
    $replace = [""];
    $input_censored = "";

    if (isset($_POST['txtInput']) && isset($_POST['txtSearch']) && isset($_POST['txtReplace'])) {
        $input = $_POST['txtInput'];
        $search[0] = $_POST['txtSearch'];
        $replace[0] = $_POST['txtReplace'];

        if (!empty($input) && !empty($search) && !empty($replace)) {
            $input_censored = str_replace($search, $replace, $input);
            echo ($input_censored);
        }
    }

    ?>
    <hr>
    <form method="post">
        <textarea name="txtInput" id="txtInput" cols="30" rows="10"><?php echo $input_censored; ?></textarea>
        <br>
        Search for:
        <br>
        <input type="text" name="txtSearch" id="txtSearch" value="<?php echo $search[0]; ?>">
        <br>
        Replace With:
        <br>
        <input type="text" name="txtReplace" id="txtReplace" value="<?php echo $replace[0]; ?>">
        <br><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Replace">
    </form>
</body>

</html>