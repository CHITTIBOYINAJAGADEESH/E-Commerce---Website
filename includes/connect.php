<?php
$servername = "localhost";
$username = "root";
$password = "jagga2527";
$dbname = "ecommerce_1";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
