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
        include 'header.php';
        ?>
        <title>Floured - Login</title>
    </head>
    <body>    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" href="index.php">
<!--        <img class="logo" src="" alt="Floured"
             title="Homepage"/>-->
        <?php
        if (isset($_SESSION['fname'])) {
            if ($_SESSION['role'] == 'Admin') {
                echo "Floured! Admin";
            }
        } else {
            echo "Floured!";
        }
        ?>

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expand" aria-controls="expand" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="expand">  
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>

            </li> 
            <?php
            if (isset($_SESSION['fname'])) {
                if ($_SESSION['role'] == 'Admin') {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="manageuser.php">User Management<span class="sr-only"></span></a>
                    </li> 

                    <li class="nav-item active">
                        <a class="nav-link" href="managecatalogue.php">Product Management<span class="sr-only"></span></a>
                    </li> 
                    <?php
                } else if ($_SESSION['role'] == 'Member'){ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="viewdelivery.php">Delivery<span class="sr-only"></span></a>
                    </li>
                <?php
                
                }
            }
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="catalogue.php">Catalogue</a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="EmbeddedMaps.php">Store Information</a>
            </li>    



        </ul>
        <ul class="navbar-nav">

            <?php
            if (isset($_SESSION['fname'])) {
                if ($_SESSION['role'] == 'Member') {
                    ?>
                    <li class="nav-item" >
                        <a class="nav-link" href="cart.php"><i style="font-size:20px;" class="fas fa-shopping-cart"></i> Cart</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:20px;" class="fa fa-user"></i> <?php echo $_SESSION['fname'] ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">My Profile</a>
                            <a class="dropdown-item" href="passwordchange.php">Change my Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="settings.php">Settings</a>
                        </div>
                    </li
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i style="font-size:20px;" class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>

                    <?php
                }
                if ($_SESSION['role'] == 'Admin') {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="management.php"><i style="font-size:20px;" class="fas fa-sliders-h"></i> Management Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i style="font-size:20px;" class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                    <?php
                }
            } else {
                ?>
                <li class="nav-item" >
                    <a class="nav-link" href="cart.php"><i style="font-size:20px;" class="fas fa-shopping-cart"></i> Cart</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i style="font-size:20px;" class="fa fa-user"></i> Register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php"><i style="font-size:20px;" class="fa fa-sign-in-alt"></i> Login</a>
                </li>
            <?php }
            ?> 


        </ul>
    </div>
</nav>
<br>
<br>
        <br/>
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
                    <button class="btn btn-dark submit_button" type="submit">Submit</button>   
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