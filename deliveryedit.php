<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        $$conn = mysqli_connect("localhost", "root", "", "deliverydate");
        // Check connection
        if ($$conn === false) {
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
            <h1>Change Delivery Date</h1>
            <p> Change your date here.</p>        
            <form action="" method="post">
                <label for="Delivery">Delivery Date:</label>              
                <input type="date" id="dateD" name="dateD"
                       min="<?php $Date = $date = date("Y-m-d");
        echo date('Y-m-d', strtotime($Date . ' + 2 days'));
        ?>" 
                       max="<?php $Date = $date = date("Y-m-d");
                       echo date('Y-m-d', strtotime($Date . ' + 14 days'));
        ?>"
                       >
                <input type="hidden" id="rowid" name="rowid" value="
                <?php
                if (isset($_POST['editdate'])) {
                    $rowid = $_POST['editdate'];
                    echo $rowid;
                }
                ?>
                       ">
                <input type="submit" name="submit">
                <br>
                <input type="button" value="Back" onclick="window.location.href = 'viewdelivery.php';">
            </form>  
            <a style="color: red;">
                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST["dateD"])) {
                        echo "Date chosen is empty or unavailable. ";
                    } else {
                        $launch_date = $_POST['dateD'];
                        $rowid = $_POST['rowid'];
                        $sql = "UPDATE deliverydate SET date='$launch_date' WHERE id='$rowid'";
                        if (mysqli_query($$conn, $sql)) {
                            echo "Date has been changed to ";
                            echo $launch_date;
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

