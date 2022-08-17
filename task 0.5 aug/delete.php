<?php
include 'config.php';
$id=$_GET['id'];
// echo $numb;
$query="DELETE FROM user WHERE id=$id";
$data=mysqli_query($con,$query);
if($data)
{ 
    echo"record deleted from database";
}
else{
    echo "failed to delete from database";
}
?>