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
        
        $cakeId = $_POST["cakeId"];
        $imgurl = $_POST["imgurl"];
        $price = substr($_POST["price"], 1);
        $dimension = $_POST["dimension"];
        $name = $_POST["name"];
        $memberId = $_SESSION['memberID'];
        $quantity = $_POST["quantity"];

        $sql3 = "INSERT INTO shoppingcart (CakeId, Price, Imgurl, MemberId, Quantity, Name, Dimension) "
                . "VALUES ($cakeId, $price, '$imgurl', $memberId, $quantity, '$name', '$dimension')";
        
        //INSERT INTO `shoppingcart`(`CakeId`, `Price`, `Imgurl`, `MemberId`, `CartId`, `Quantity`, `Name`, `Dimension`) 
                //VALUES (31,40,'/images/forest.jpg',2,1,3,'Forest', '20 x 10 x 5');

        $result5 = $conn->query($sql3);
        if($result5){
            echo 'Successfully added item to cart!';
        }    
        else{
            echo "Error adding item to cart!";
        }
        

?>

