<?php
include 'config.php';
$query="SELECT * FROM user2";
$result=mysqli_query($con,$query);
var_dump($result);
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Confirm Password</th>
      <th scope="col">Operation 1:</th>
      <th scope="col">Operation 2:</th>
    </tr>
  <?php
  while($row=mysqli_fetch_assoc($result))
  {
    // $id=$row['user_id'];
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['number']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['confirm_password']; ?></td>
    <td><a href= 'delete2.php?id=<?php echo $row['user_id']?>'>delete</a> </td>
    <td><a href= 'delete2.php?id=<?php echo $row['user_id']?>'>update/edit</a> </td>
    <?php
  }
  ?>
  </thead>
</table>
</body>
</html>