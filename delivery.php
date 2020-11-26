<?php
require 'dbconfig.php';
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        $conn = OpenCon();
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        include 'header.php';
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br/>
        <br/>
        <br/>
        <main class="container">        
            <h1>Order Delivery Date</h1>
            <p> 
                Please select your date here.        
            </p>        
            <form action="" method="post">
                <label for="Delivery">Delivery Date:</label>              
                <input type="date" id="dateD" name="dateD"
                       min="<?php $Date = $date = date("Y-m-d");
        echo date('Y-m-d', strtotime($Date . ' + 2 days')); ?>" 
                       max="<?php $Date = $date = date("Y-m-d");
        echo date('Y-m-d', strtotime($Date . ' + 14 days')); ?>"
                       >
                <input type="submit" name="submit">
            </form>  
            <a style="color: red;">
                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST["dateD"])) {
                        echo "Date chosen is empty or unavailable. ";
                    } else {
                        $launch_date = $_POST['dateD'];
                        echo $launch_date;
                        //echo $launch_date;
                        //echo "Date Chosen !!!";
                        $sql = "INSERT INTO deliverydate (memberid, date) VALUES ('2', '$launch_date')";
                        if (mysqli_query($conn, $sql)) {
                            echo " has been selected.";
                        } else {
                            echo "Date chosen is empty or unavailable. ";
                        }
                    }
                }
                ?>
            </a>
        </main>    

    </body>
                <?php
                include 'footer.php';
                ?>
</html>

