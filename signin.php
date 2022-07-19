<?php 
$conn = mysqli_connect("localhost","root","Shai1213@","ecom");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
  

$Email=trim($_POST['Email']);
$Password=trim($_POST['Password']);




 $query="SELECT * from tbl_user where email='$Email' and password='$Password'";

 $raw = mysqli_query($conn,$query);

 $count = mysqli_num_rows($raw);

 if($count>0)
 {
   $response['message']="exits";
 }
else{
   $response['message']="not exits";
 }
 echo json_encode($response);
?>