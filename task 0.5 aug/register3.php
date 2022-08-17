<?php
require 'config.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['pass'];
  $sql="INSERT INTO `user3`(`id`,`Name`,`Email`,`Phone`,`Password`) VALUES('','$name','$email','$phone','$password')";
  $query=mysqli_query($con,$sql);
  if($query){
      echo "Database created successfully"; 
  }
  else{
  echo "error creating database:".mysqli_error($con);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<body>
<form method="post">
  <h2>Insert operation</h2>
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="tel" class="form-control" id="pass" name=pass>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</body>
</html>