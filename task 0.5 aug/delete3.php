<?php
require 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM `user3` WHERE id=$id ";
$query=mysqli_query($con,$sql);
header('location:view3.php');
?>