<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['dob'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    if (@$con = mysqli_connect('localhost', 'root', '', 'cybercom')) {
        $query = "insert into tbluser (name,email,dob) values('$name','$email','$dob')";
        if ($result = mysqli_query($con, $query)) {
            echo ("Inserted");
        } else {
            echo (mysqli_error($con));
        }
    }
} else {
    echo ("Fill All The Details");
}
