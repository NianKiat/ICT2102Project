<?php
    //database connection
    $link = mysqli_connect("localhost", "root", "", "deliverydate");
        // Check connection
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
  //get post from index.php
  $id = $_POST['delete_id'];
  //query to delete row
  $query = mysqli_query($link,"DELETE FROM deliverydate WHERE id='$id'");
?>



