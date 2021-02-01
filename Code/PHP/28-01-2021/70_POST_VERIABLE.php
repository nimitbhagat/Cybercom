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


    if (isset($_POST['ddlDay']) && isset($_POST['txtDate']) && isset($_POST['txtTime'])) {
        $day = $_POST['ddlDay'];
        $date = $_POST['txtDate'];
        $time = $_POST['txtTime'];

        if (!empty($day) && !empty($date) && !empty($time)) {
            echo $day . " " . $date . " " . $time;
        } else {
            $visibility = "";
        }
    }
    ?>

    <form method="post">
        Day: <Select name="ddlDay">
            <option disabled selected> Select Day</option>
            <option value="SUNDAY">SUNDAY</option>
            <option value="MONDAY">MONDAY</option>
            <option value="TUESDAY">TUESDAY</option>
            <option value="WEDNESDAY">WEDNESDAY</option>
            <option value="THURSDAY">THURSDAY</option>
            <option value="FRIDAY">FRIDAY</option>
            <option value="SATURDAY">SATURDAY</option>
        </Select>

        Date: <input type="date" name="txtDate" id="txtDate">

        Time: <input type="time" name="txtTime" id="txtTime">

        <input type="submit" name="btnSubmit" value="Submit">
    </form>
    <label <?php echo $visibility; ?>>Please Fill All The Details</label>

    <hr>

</body>

</html>