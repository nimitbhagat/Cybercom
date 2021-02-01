<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $offset = 0;
    $input = "";
    $search = "";
    $replace = "";

    if (isset($_POST['txtInput']) && isset($_POST['txtSearch']) && isset($_POST['txtReplace'])) {
        $input = $_POST['txtInput'];
        $search = $_POST['txtSearch'];
        $replace = $_POST['txtReplace'];
        $length = strlen($search);

        if (!empty($input) && !empty($search) && !empty($replace)) {
            while ($strpos = strpos($input, $search, $offset)) {
                $offset = $strpos + $length;
                $input = substr_replace($input, $replace, $strpos, $length);
            }
            echo ($input);
        } else {
            echo ("Fail");
        }
    }

    ?>
    <hr>
    <form method="post">
        <textarea name="txtInput" id="txtInput" cols="30" rows="10"><?php echo $input; ?></textarea>
        <br>
        Search for:
        <br>
        <input type="text" name="txtSearch" id="txtSearch" value="<?php echo $search; ?>">
        <br>
        Replace With:
        <br>
        <input type="text" name="txtReplace" id="txtReplace" value="<?php echo $replace; ?>">
        <br><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Replace">
    </form>

    <hr>


</body>

</html>