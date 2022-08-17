<?php
include 'config.php';
$id=$_GET['id'];
$query="DELETE FROM user2 WHERE user_id=$id";
$data=mysqli_query($con,$query);
if($data){
    echo "record deleted from database";
}
else{
    echo"failed to delete from databse";
}
?>