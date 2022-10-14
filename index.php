<?php
// incldue connection file
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    
    // insert data into database
    $sql = "insert into `empdata` (name,email,phone,city) values('$name','$email','$phone', '$city')";
    $result=mysqli_query($con, $sql);
    if($result){
        echo("Data entered Sucessfully");
    }else{
        die(mysqli_error($con));
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create & Read</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form method="post">
   <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
   </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Phone No.</label>
    <input type="text" class="form-control" placeholder="Enter Phone No." name="phone" autocomplete="off">
  </div>
  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="Enter your City" name="city" autocomplete="off">
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name=submit>Submit</button>
</form>
    </div>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="display.php" class="text-light">View All Employee</a></button>
    </div>


   </body>
</html>