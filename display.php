<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- link Add user page -->
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add Employee</a>
    </button>

    <!-- show data from database in table -->
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No.</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    <!-- sql query for fetch data  -->
    <?php
    $sql="Select * from `empdata`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row= mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $city=$row['city'];
            echo ' 
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$city.'</td>
            </tr>';
        }
    }
   ?>
  </tbody>
</table>


    </div>
</body>
</html>