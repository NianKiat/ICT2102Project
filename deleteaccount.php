<?php
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'navbar.php';
        include 'header.php';
        
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
//        include 'navbar.php';
        ?>
        <div class="container">
            <br>
            <h1>Are you sure you wish to delete your account?</h1>
            <h4>Your account will be deleted forever.</h4>
            <br>
            <p>Type "Yes" and click on the Confirm button below to confirm your deletion.</p>
            <form action="deleteprocess.php" method="post"> 
                <br>
                <div class="form-group">
                    <label for="confirmdelete"></label>            
                    <input class="form-control" type="text" id="confirmdelete" name="confirmdelete"                   
                           placeholder="Type 'yes' to confirm your deletion">            
                </div>
                <div>
                    <button class="btn btn-info btn-block" type="submit">Confirm</button>   
                </div>
                <br>
            </form>
            
        </div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
