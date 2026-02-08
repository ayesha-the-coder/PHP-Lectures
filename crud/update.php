<?php
 include('conn.php');
 $id = $_GET['id'];
//   echo "User id ". $id;

$reslut = mysqli_query($con, "SELECT *  FROM user Where id=$id");
$fetch = mysqli_fetch_assoc($reslut);
// echo "Username : ".$fetch['name'];
if(isset($_POST['update'])){
    $username =  $_POST['username'];
   $email =  $_POST['email'];
   $city =  $_POST['city'];

  $sql =  "UPDATE user SET name='$username', email='$email', city= '$city' WHERE id = $id";
  $update_data = mysqli_query($con ,$sql);
  // header("Location:read.php");
  
   if($update_data)
    {
        echo "<script>
                alert('Record Updated Successfully!');
                window.location='read.php';
              </script>";
    }
    else
    {
        echo "<script>
                alert('Update Failed!');
              </script>";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-6">
                <div class="card shadow p-3">
                    <h1 class="text-center">Update Data</h1>
                    <div class="card-body">
                        <form action="#" method="post">
                            <label for="form-label">UserName</label>
                            <input type="text" id="form-label" placeholder="Enter Your Name" class="form-control mb-4" name="username" value="<?php echo $fetch['name'];?>">

                             <label for="form-label">Email</label>
                            <input type="email" id="form-label" placeholder="Enter Your Name" class="form-control mb-4" name="email" value="<?php echo $fetch['email'];?>">


                            <label for="form-label">City</label>
                            <input type="text" id="form-label" placeholder="Enter Your City" class="form-control mb-4" name="city" value="<?php echo $fetch['city'];?>">

                            <button type="submit" class="btn btn-primary w-100" name="update">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>