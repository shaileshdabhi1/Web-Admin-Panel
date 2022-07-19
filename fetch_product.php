<?php

$catid=$_POST['id'];

$servername = "localhost";
$username = "root";
$password = "Shai1213@";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"ecom");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM tbl_product where catid='$catid'";
$result = mysqli_query($conn, $sql) or die("Error in Selecting ");

$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

echo json_encode($emparray);

?>
