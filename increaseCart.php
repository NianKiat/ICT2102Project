<?php

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shoppingcart";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
            $cartid = $_POST["update_id"];
            $quantity = $_POST["quantity"] + 1;
            $sql5 = "UPDATE shoppingcart SET Quantity = " . $quantity . " WHERE CartID = " . $cartid;
            $conn->query($sql5);    

            
            
        
?>