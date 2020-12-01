<?php
require 'dbconfig.php';
include 'sessiontest.php';
include 'adminTraverseSecurity.php';

 $conn = OpenCon();
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
   
  $id = $_POST['delete_id'];
  $query = mysqli_query($conn,"DELETE FROM checkout WHERE checkoutid='$id'");
?>

