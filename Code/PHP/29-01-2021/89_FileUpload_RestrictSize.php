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

    if (isset($name)) {

        $dir = "upload/";
        $name = $_FILES['UploadFile']['name'];
        $size = $_FILES['UploadFile']['size'] / (1024 * 1024);
        $type = $_FILES['UploadFile']['type'];
        $tmp_name = $_FILES['UploadFile']['tmp_name'];
        $max_size = 2;
        
        if (!empty($name)) {
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