<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT E_id, Firstname, City FROM Employee ORDER BY City DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "E_id: " . $row["E_id"]. " - Name: " . $row["Firstname"]. " " . $row["City"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
