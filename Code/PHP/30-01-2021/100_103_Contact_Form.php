<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $msg = $name = $email = $message = "";

    if (isset($_POST['txtName']) && isset($_POST['txtEmail']) && isset($_POST['txtMessage'])) {
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $message = $_POST['txtMessage'];

        if (!empty($name) && !empty($email) && !empty($message)) {
            if (strlen($name) < 25 || strlen($email) < 50 || strlen($message) < 1000) {
                $to = 'bhagatnimit8@gmail.com';
                $subject = "Contact Form Submitted";
                $body = $name . "\n" . $message;
                $headers = "From: " . $email;

                if (@mail($to, $subject, $body, $headers)) {
                    $msg = "Thanks For Contacting Us. We'll Be In Touch Soon";
                } else {
                    $msg = "Please Try Again.";
                }
            } else {
                $msg = "Length Exceded";
            }
        } else {
            $msg = "All Fields Are Required";
        }
    }

    ?>

    <form method="post">
        Name:<br><input type="text" name="txtName" id="txtName" maxlength="25" value="<?php echo $name; ?>"><br><br>
        Email:<br><input type="email" name="txtEmail" id="txtEmail" maxlength="50" value="<?php echo $email; ?>"><br><br>
        Message:<br><textarea name="txtMessage" id="txtMessage" cols="30" rows="10" maxlength="1000"><?php echo $message; ?></textarea><br><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit">
        <label style="color: red;"><?php echo $msg; ?></label>
    </form>
</body>

</html>