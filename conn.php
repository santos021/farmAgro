<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "farmagro";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn) {
        echo "Connection Suceses.";
    }
    else {
        echo "Connection Failed" .mysqli_connect_error();
    }
?>