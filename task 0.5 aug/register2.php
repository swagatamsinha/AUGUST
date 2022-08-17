<?php 
require 'config.php'; 
// $name=$_POST['name'];
// $numb=$_POST['numb'];
// $mail=$_POST['mail'];
// $adr=$_POST['adr'];
// $pass=$_POST['pass'];
// $cpass=$_POST['cpass'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
<form action="" method="post">
<div class="container mt-4">
<h2> Passengers Registration:</h2>
  <div class="mb-3">
    <label>Username:</label>
    <input type="text" class="form-control" id="name" name="name" required> 
  </div>
  <div class="mb-3">
    <label>Contact number</label>
    <input type="tel" class="form-control" id="numb" name="numb" required >
  </div>
  <div class="mb-3"> 
    <label>Email</label>
    <input type="email" class="form-control" id="mail" name="mail" required>
  </div>
  <div class="mb-3">
    <label>Residential address</label>
    <input type="text" class="form-control" id="adr" name="adr" required>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
  </div>
  <div class="mb-3">
    <label>Confirm Password</label>
    <input type="password" class="form-control" id="cpass" name="cpass" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">submit</button>
</form>
<?php
if(isset($_POST['submit']))
{ 
    $sql2="INSERT into `user2`(`user_id`,`name`,`number`,`email`,`address`,`password`,`confirm_password`)VALUES('','".$_POST['name']."','".$_POST['numb']."','".$_POST['mail']."','".$_POST['adr']."','".$_POST['pass']."','".$_POST['cpass']."')";

//     INSERT INTO `user2`(`user_id`, `name`, `number`, `email`, `address`, `password`, `confirm_password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
// echo $sql2;

    $row=mysqli_query($con,$sql2);
    if($row){
        echo "Database created successfully";
    }
    else{
    echo "error creating database:".mysqli_error($con);
    }
}

?>
</body>
</html>