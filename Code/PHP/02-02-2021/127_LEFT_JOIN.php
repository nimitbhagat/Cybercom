<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include_once('database.php');

    $query = "select  tbluserdetails.name, tbllogindata.username  from tbluserdetails LEFT JOIN tbllogindata ON tbllogindata.id=tbluserdetails.id";

    $data = mysqli_query($con, $query);


    ?>

    <table>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($data)) {
            ?>
                <tr>
                    <td><?php print_r($row); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>