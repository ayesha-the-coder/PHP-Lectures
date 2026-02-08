<?php
 include('conn.php');
 $id = $_GET['id'];

 
  $del =  "DELETE FROM user  WHERE id = $id";
  $delte_data = mysqli_query($con ,$del);
   header("Location:read.php");


?>