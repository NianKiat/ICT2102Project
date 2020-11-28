<?php
include 'sessiontest.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br>
        <main class="container"> 
            <br>
            <br>
            <br>
            <h1>Password Reset</h1>
            <p> 
                An e-mail will be sent to you with instructions on how to reset your password.        
            </p>        
            <form action="reset-request.inc.php" method="post">            
                <div class="form-group">
                    <label for="email">Email:</label>            
                    <input class="form-control" type="text" id="email" name="email"                   
                           required name="email" placeholder="Enter your e-mail adress">   
                </div>
                <div>
                    <button class="btn btn-dark" name="reset-request-submit" type="submit">Receive new password by e-mail</button>   
                </div>
                <br>
            </form>   
                <?php
                if (isset($_GET["reset"])){
                    if ($_GET["reset"] == "success") {
                        echo '<p style="color:green;" class="signupsuccess">E-mail has been successfully sent!</p>';
                    }
                }
                
                
                ?>
        </main>    
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
