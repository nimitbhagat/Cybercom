<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $visibility = "hidden";

    $day = "";
    $date = "";
    $time = "";

    if (isset($_GET['txtDay']) && isset($_GET['txtDate']) && isset($_GET['txtTime'])) {
        $day = htmlentities($_GET['txtDay']);
        $date = htmlentities($_GET['txtDate']);
        $time = htmlentities($_GET['txtTime']);

        if (!empty($day) && !empty($date) && !empty($time)) {
            echo $day . " " . $date . " " . $time;
        } else {
            $visibility = "";
        }
    }
    ?>

    <form method="get">
        Day: <input type="text" name="txtDay" id="txtDay" value="<?php echo $day; ?>">

        Date: <input type="date" name="txtDate" id="txtDate" value="<?php echo $date; ?>">

        Time: <input type="time" name="txtTime" id="txtTime" value="<?php echo $time; ?>">

        <input type="submit" name="btnSubmit" value="Submit">
    </form>
    <label <?php echo $visibility; ?>>Please Fill All The Details</label>

    <hr>

</body>

</html>