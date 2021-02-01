<?php

require_once('database.php');


$visitor_ip = $_SERVER['REMOTE_ADDR'];

function ipCheck($visitor_ip, $con)
{
    $query = "select ip from ip where ip='$visitor_ip'";
    $row = mysqli_num_rows(mysqli_query($con, $query));

    if (!$row) {
        ipAdd($visitor_ip, $con);
        updatCeount($con);
    }
}

function ipAdd($visitor_ip, $con)
{
    $query = "insert into ip values('$visitor_ip')";
    @mysqli_query($con, $query);
}

function updatCeount($con)
{
    $query = "Select count from hitcount";

    $value = mysqli_query($con, $query);

    $COUNT = mysqli_fetch_row($value)[0] + 1;

    $update = "update hitcount set count=$COUNT";

    if (@!mysqli_query($con, $update)) {
        echo mysqli_error($con);
    }
}

ipCheck($visitor_ip, $con);
