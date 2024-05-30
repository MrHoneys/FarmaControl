<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $bancodb = "";

    $conn = new mysqli($server, $username, $password, $bancodb);

    if ($conn -> connect_error) {
        die($conn -> connect_error);
    }
?>