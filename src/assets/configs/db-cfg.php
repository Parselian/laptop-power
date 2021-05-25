<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'laptop_power';

    $connect = mysqli_connect($host, $user, $password, $db)
        or die('MySQL connection fail. ' . mysqli_error($connect));
