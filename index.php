
<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $Password=$_POST['password'];
    
    $sql= "insert into `user`(name,email,phone,password)values('$Name','$Email','$Mobile','$Password')";
   $result = mysqli_query($conn, $sql);
  
   if($result)
   {
    header('location:display.php');
   }
   else{
    die(mysqli_error($conn));
   }

}

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud</title>
  </head>

  <body>
   <div class="container mt-4">
    <form method="post">
    <div class="row mb-2 ml-2">
    <label>Name</label>
      <input type="text" name="name" placeholder="enter Your name">
    
  </div>
  <div class="row mb-2">
    <label>E-mail</label>
    
      <input type="email" name="email" placeholder="enter Your E-mail">
   
  </div>
   <div class="row mb-2">
    <label>Mobile</label>
    
      <input type="mobile" name="mobile" placeholder="enter Your mobile">
   
  </div>
   <div class="row mb-2">
    <label>Password</label>
    
      <input type="password" name="password" placeholder="enter Your password">
   
  </div>
 <div class="row mb-2">
  <button class="btn btn-primary" name="submit" type="submit">submit</button>
  
</div>
</form>
   </div>

  
  </body>
</html>