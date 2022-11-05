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

  $sql = "SELECT * FROM barangay order by name asc ";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["name"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>

