<?php

// connection string
$con = new mysqli('localhost', 'root', '', 'emp');

if(!$con){
    die(mysqli_error($con));
}

?>