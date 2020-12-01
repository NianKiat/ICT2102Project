<?php
include 'sessiontest.php';
if(isset($_SESSION['fname'])){
header('Location: profile.php');
die(); 
}
?>
<html>
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
        <main class="container">        
            <h1 class="section_heading" style="margin-bottom:0px;">Member Login</h1>
            <p class="subtext"> 
                For new members, please go to the <a href="register.php">Registration</a> page.        
            </p>        
            <form action="loginprocess.php" method="post">            
                <div class="form-group">
                    <label for="email">Email:</label>            
                    <input class="form-control" type="email" id="email" name="email"                   
                           required name="email" placeholder="Enter email">            
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>            
                    <input class="form-control" type="password" id="pwd"                   
                           required name="pwd" placeholder="Enter password">             
                </div>
                <div>
                    <button class="btn submit_button" type="submit">Submit</button>   
                </div>
                <div>
                    <br>
                    <?php
                    if(isset($_GET["newpwd"])){
                        if($_GET["newpwd"] == "passwordupdated") {
                            echo '<h2 style="color: green;">Your password has been reset!</h2>';
                        }
                    }
                    ?>
                <a href ="reset-password.php">Forgot your password?</a>
                </div>
                
            </form>    
        </main>    
        <?php
        include "footer.php";
        ?>
    </body>
</html>