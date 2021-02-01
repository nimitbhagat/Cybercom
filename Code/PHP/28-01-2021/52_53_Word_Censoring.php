<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Censoring</title>
</head>

<body>

    <?php
    $input = "";
    $find = ['alex', 'billy', 'dale'];
    $replace = ['A**x', 'B***y', 'D**e'];
    $input_censored = "";

    if (isset($_POST['txtInput']) && !empty($_POST['txtInput'])) {
        $input = $_POST['txtInput'];
        $input_censored = str_ireplace($find, $replace, $input);
        echo $input_censored;
    }

    ?>
    <hr>
    <form method="post">
        <textarea name="txtInput" id="txtInput" cols="30" rows="10"><?php echo $input_censored; ?></textarea>
        <br><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit">
    </form>




</body>

</html>