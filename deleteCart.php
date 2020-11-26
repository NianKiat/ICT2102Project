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
        
            $cartid = $_POST["delete_id"];
            $sql3 = "DELETE FROM shoppingcart WHERE CartID = " . $cartid;
            $conn->query($sql3);    
        

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

