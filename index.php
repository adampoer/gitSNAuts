<?php

$servername = "172.18.0.2";
$username = "root";
$password = "root";
$dbname = "Redlock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NAMA, ALAMAT, JABATAN FROM users";
$result = $conn->query($sql);
echo $result->num_rows;

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "Id: " . $row["ID"]. " - Name: " . $row["NAMA"]. " - Alamat: " . $row["ALAMAT"]. " - Jabatan: ".$row["JABATAN"]."<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();

?>