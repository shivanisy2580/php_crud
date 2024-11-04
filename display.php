<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>display</title>
  </head>

  <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="select*from `user`";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
     echo "<tr>
      <th> $row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td><button class='btn btn-primary'><a href='update.php?id={$row['id']}' class='text-light'>Edit</a></button>
      <button class='btn btn-danger'><a href='delete.php?id={$row['id']}' class='text-light'>Delete</a></button>
      </td>
    </tr>";
    
        

    }
   }
  ?>

    
   
  </tbody>
</table>
    </div>

     </body>
</html>
