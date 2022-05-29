<?php
$db_host = "localhost";
$db_username="userntt";
$db_password="thisisnextthinktank2021";
$db_database="ntt";
$conn = new mysqli($db_host, $db_username, $db_password, $db_database);
if($conn->connect_error) {
  die("Connection failed");
}
?>