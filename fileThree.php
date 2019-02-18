<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="fileOne.php" class="btn btn-primary">Add User</a>
   <table class="table table-hover table-dark">
       <tr>
           <th>Name</th>
           <th>Phone</th>
           <th>Salary</th>
           <th>Delete</th>
           <th>Update</th>
       </tr>
       <?php
       /**
        * Created by PhpStorm.
        * User: emobilis
        * Date: 2/11/19
        * Time: 11:16 AM
        */
       $conn = mysqli_connect("localhost","root","","employeez");
        if(!$conn){
            echo "Connection lost";
        }else{
            $watu = mysqli_query($conn,"SELECT * FROM details");
            if(!$watu){
                echo "Fetching failed";
            }else{
                while ($row = mysqli_fetch_assoc($watu)){
                    extract($row);
                    echo "
                          <tr>
                              <td>$name</td>
                              <td>$phone</td>
                              <td>$salary</td>
                              <td><a href='#' class='btn btn-danger'>Delete</a></td>
                              <td><a href='#' class='btn btn-success'>Update</a></td>
                          </tr>
                          ";
                }
            }
        }
       ?>
   </table>
</body>
</html>