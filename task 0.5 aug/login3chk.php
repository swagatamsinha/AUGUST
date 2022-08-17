<?php
include 'config.php';
$email= $_POST['email'];
$password= $_POST['password'];
if(isset($email))
{
    $sql2= "SELECT * FROM user3 WHERE email='".$email."' AND password='".$password."'";
    $result = mysqli_query($con,$sql2);
   if($result->num_rows>0){
    header('location: Dboard.php');
   }
   else{
    echo "Login failed";
   }
}
        

?>
