<?php
    header('Content-Type: text/html; charset=utf-8');
    $servername = "localhost";
    $username = "pma";
    $password = "12345";
    $basename = "projektbaza";
    // Create connection
    $dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error
    connecting to MySQL server.'.mysqli_error());
    mysqli_set_charset($dbc, "utf8");

?>
