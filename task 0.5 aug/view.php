<?php
include 'config.php';
$query="select * from user";
$result=mysqli_query($con,$query);
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
      
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
      <th scope="col">Operation 2</th>

    </tr>
<?php

while($row=mysqli_fetch_assoc($result))
{
    $id=$rows['id'];
    ?>
    <tr>
        
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['numb']; ?></td>
        <td><?php echo $rows['mail']; ?></td>
        <td><?php echo $rows['adr']; ?></td>
        <td><?php echo $rows['pass']; ?></td>
        <td><a href= 'delete.php?id=<?php echo $rows['id']?>'>delete</a> </td>
        <td><a href= 'update.php?id=<?php echo $rows['id']?>'>Update/edit</a> </td>
       
    </tr>

    <?php
}
?>
  </thead>
  <tbody>
     
  </tbody>
</table>

</body>
</html>