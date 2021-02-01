<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php




    //echo ($name . "<br>" . $size . "<br>" . $type . "<br>" . $tmp_name . "<br>");

    if (isset($_FILES['UploadFile']['name'])) {
        $dir = "upload/";
        $max_size = 2;
        $name = $_FILES['UploadFile']['name'];
        $size = $_FILES['UploadFile']['size'] / (1024 * 1024);
        $type = $_FILES['UploadFile']['type'];
        $tmp_name = $_FILES['UploadFile']['tmp_name'];

        $extension = strtolower(substr($name, strpos($name, '.') + 1));

        echo ("<BR><BR><BR>");
        if (!empty($name)) {
            if (($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg") {
                if ($size <= $max_size) {
                    if (move_uploaded_file($tmp_name, $dir . $name)) {
                        echo ("Uploded to " . $dir . $name);
                    } else {
                        die("Error");
                    }
                } else {
                    echo ("!!!!File Size Greater Then 2 MB.");
                }
            } else {
                echo ("File Must Be JPEG/JPG");
            }
        } else {
            echo ("Choose A File");
        }
    }


    ?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="UploadFile" id="UploadFile">
        <input type="submit" value="Upload" name="btnUpload" id="btnUpload">
    </form>
</body>

</html>