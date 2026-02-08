<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5">
                <h1 class="text-center">Show Data</h1>
                <table class="table table-striped mt-5" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                           
                        </tr>
                    </thead>
            
                    <tbody>
                        <?php
                        include('conn.php');

                        $select_query = "SELECT * FROM user";
                        $data =  mysqli_query($con , $select_query);
                        
                        while($show_data = mysqli_fetch_assoc($data)){                        
                    
                        ?>
                        <tr>
                            <td><?php echo $show_data['id'];?></td>
                            <td><?php echo $show_data['name'];?></td>
                            <td><?php echo $show_data['email'];?></td>
                            <td><?php echo $show_data['city'];?></td>
                            <td><a href="update.php?id=<?php echo $show_data['id'];?>" class="btn btn-info">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $show_data['id'];?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    </tbody>
                    <?php
                }
                ?>
                </table>
            </div><!--First Column Close-->
        </div><!--First Row Close-->
    </div>
    
</body>
</html>