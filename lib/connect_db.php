<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cnpm";
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_set_charset($conn,"utf8");
    if ($conn->connect_error)
        die('Disconnected');
    echo 'connect';

?>