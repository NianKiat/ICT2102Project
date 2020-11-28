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
            <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
                echo "Could not validate your request,";
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>
                    <br>
                    <br>
                    <br>
                    <h1>Reset Password</h1>
                    <p> 
                        Fill in the fields below to set a new password for your FLOURED account!     
                    </p> 
                    <form action="reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                        <div class="form-group">
                            <label for="pwd">New Password:</label>  
                            <input class="form-control" type="password" name="pwd" placeholder="Enter a new password">
                        </div>

                        <div class="form-group">
                            <label for="pwd-repeat">Confirm Password:</label>  
                            <input class="form-control" type="password" name="pwd-repeat" placeholder="Confirm new password">
                        </div>

                        <div>
                            <button class="btn btn-dark" type="submit" name="reset-password-submit">Reset Password</button>
                        </div>
                    </form> 




                    <?php
                }
            }
            ?>
        </main>    
    </body>
    <br>
    <?php
    include 'footer.php';
    ?>
</html>
