<?php
    ob_start();
    session_start();

    $timezone = date_default_timezone_set('Asia/Bishkek');
    $con = mysqli_connect('localhost', 'root', '', 'slotify');

    if(mysqli_connect_errno()) {
        echo 'Failed to connect:' . mysqli_connect_errno();
    }