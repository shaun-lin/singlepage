<?php
$servername = "localhost"; 
$username = "root"; 
$password = "1234qwera"; 
$database = "blog";

$con = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>