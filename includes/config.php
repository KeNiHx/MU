<?php
    ob_start();

    $timezone = date_default_timezone_set("America/Edmonton");

    $con = mysqli_connect("localhost", "root", "", "mu");

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>