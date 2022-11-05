<?php
$servername   = "sql200.epizy.com";
$database = "epiz_32932003_courier_management";
$username = "epiz_32932003";
$password = "Ef75oYN1ff";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>

