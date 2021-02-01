<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $handle = fopen('demo.txt', 'a');

    if (isset($_POST['txtAdd']) && !empty($_POST['txtAdd'])) {
        fwrite($handle, $_POST['txtAdd'] . "\n");
    }
    fclose($handle);

    $read = file("demo.txt");
    foreach ($read as $row) {
        echo ($row . "<br>");
    }

    ?>
    <hr>
    <form method="post">
        <input type="text" name="txtAdd" id="txtAdd">
        <input type="submit" name="btnAdd" value="Add">
    </form>

</body>

</html>