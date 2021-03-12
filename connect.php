<?php
$servername = "localhost";
$username = "movietest";
$password = "root";
$dbname = "moviedb";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
