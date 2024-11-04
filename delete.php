<?php
include 'db.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="delete  from `user` where id='$id'";
    $result=mysqli_query($conn,$sql);
    
        if($result)
        {
            header('location:display.php');
        }
        else {die(mysqli_error($conn));
        }
    

}
?>