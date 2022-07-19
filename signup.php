<?php 
$conn = mysqli_connect("localhost","root","Shai1213@","ecom");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
  

$Email=trim($_POST['Email']);
$Password=trim($_POST['Password']);
$Mobile=trim($_POST['Mobile']);



 $query="SELECT * from tbl_user where email='$Email'";

 $raw = mysqli_query($conn,$query);

 $count = mysqli_num_rows($raw);

 if($count>0)
 {
   $response['message']="exits";
 }
 else
 {
    
  $sql = "INSERT INTO tbl_user(Id,Name,Email,Password,Mobile,Address) VALUES (null,null,'$Email','$Password','$Mobile',null)";

  if (mysqli_query($conn, $sql)) {
    $response['message']="inserted";
    
  } else {
    
     $response['message']="failed";
    }
    
    
 }
 echo json_encode($response);
?>