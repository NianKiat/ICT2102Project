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
                ?>
                <h1 class='section_heading' style='text-align:center'>Caked!</h1>
                <br>
                <h2 style='text-align:center'>Something went wrong!</h2>
                <p style='text-align:center'>Your request is invalid. Resubmit your request.</p>
                <button class='btn btn-info button_forms btn-block' onclick="window.location.href = 'login.php'" >Acknowledged</button>

            <?php
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>
                    <br>
                    <br>
                    <br>
                    <h1 class="section_heading" style="text-align: center">Reset Password</h1>
                    <p style="text-align: center"> 
                        Fill in the fields below to set a new password for your FLOURED account!     
                    </p> 
                    <form action="reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                        <div class="form-group">
                            <label for="pwd">New Password:</label>  
                            <input class="form-control" required type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  name="pwd" placeholder="Enter a new password">
                        </div>

                        <div class="form-group">
                            <label for="pwd-repeat">Confirm Password:</label>  
                            <input class="form-control" required type="password" name="pwd-repeat" placeholder="Confirm new password">
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-info button_forms btn-block" type="submit" name="reset-password-submit">Reset Password</button>
                        </div>
                    </form> 
                    <br>
                    <br>




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
