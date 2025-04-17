<?php
    $sqlDBCreate = "CREATE DATABASE IF NOT EXISTS final";

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    mysqli_query($conn, $sqlDBCreate);
    mysqli_close($conn);
?>