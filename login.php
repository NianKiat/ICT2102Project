<?php
include 'sessiontest.php';
if (isset($_SESSION['fname'])) {
    header('Location: profile.php');
    die();
}
?>
<html lang="en">
    <div class="wrapper">
    <head>
        <?php
        include 'navbar.php';
        include 'header.php';
        ?>
        <title>Floured - Login</title>
    </head>
    <body>    
        <br>
        <br>
        <style>
            .wrapper {
                min-height: 100%;
                display: grid;
                grid-template-rows: auto 1fr auto;
            }

        </style>
        <main class="container">        
            <h1 class="section_heading" style="margin-bottom:0px;">Member Login</h1>
            <p class="subtext" style="color: black"> 
                For new members, head to the <a style="color: black" href="register.php"><strong>Registration</strong></a> page to start your cake journey!        
            </p>        
            <form action="loginprocess.php" method="post">            
                <div class="form-group">
                    <label for="email">Email:</label>            
                    <input class="form-control" type="email" id="email" name="email"                   
                           required name="email" placeholder="Enter email">            
                </div>
                <div class="form-group ">
                    <label for="pwd">Password:</label>            
                    <input class="form-control" type="password" id="pwd"                   
                           required name="pwd" placeholder="Enter password">             
                </div>
                <div>
                    <button class="btn button_forms btn-info " type="submit">Submit</button>   
                </div>
                <div >
                    <br>
                    <?php
                    if (isset($_GET["newpwd"])) {
                        if ($_GET["newpwd"] == "passwordupdated") {
                            echo '<h2 style="color: green;">Your password has been reset!</h2>';
                        }
                    }
                    ?>
                    <a style="color: black" href ="reset-password.php"><strong>Forgot your password?</strong></a>
                </div>

            </form>    
        </main>    

    </body><?php
include "footer.php";
?>
    </div>
</html>
