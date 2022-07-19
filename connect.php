<?php
$servername = "localhost";
$username = "root";
$password = "Shai1213@";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"ecom");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO tbl_user(Id,Name,Email,Password,Mobile,Address) VALUES (null,'Shailesh','123','123','5566','Chandlodiya')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>