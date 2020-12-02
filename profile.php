<?php
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <?php
        include "header.php";
        ?>
        <title>Floured - Profile</title>

    </head>
    <style type="text/css">

        .responsive {
            width: 100%;
            /*  max-width: 400px;*/
            height: auto;
        }
    </style>
    <body>    
        <?php
        include "navbar.php";
        ?>    
        <br/>
        <br/>
        <br/>

        <div class="row">

            <main class="container">   
                <h1 class='section_heading' style="text-align: center">Profile:</h1>
                <br>
                <div class ="card mb-3" >
                    <div class="row no-gutters">
                        
                        <?php if ($_SESSION['gender'] == 'Male') { ?>
                            <img src="images/img_avatar.png" style="width: 500px" class="card-img-top" alt="profileimg"/>
                        <?php } else if ($_SESSION['gender'] == 'Female') { ?>
                            <img src="images/img_avatar2.png" style="width: 500px" class="card-img-top" alt="profileimg"/>
                        <?php } ?>
                        <div class="card-body">
                            <div class="row">

                                <div class="col">
                                    <form action="updateprofile.php" method="post">            
                                        <div class="form-group">
                                            <label for="fname">Name:</label> 
                                            <br>

                                            <h1><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?>   </h1>       
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email:</label> 
                                            <br>
                                            <h2><?php echo $_SESSION['email'] ?>     </h2>  
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact:</label>  
                                            <br>
                                            <h2><?php echo $_SESSION['contact'] ?>   </h2>         
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address:</label>  
                                            <br>
                                            <h2><?php echo $_SESSION['address'] ?>   </h2>         
                                        </div>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                            <br>

                            <div>
                                <button class="btn button_forms btn-info" type="submit">Update My Profile</button>   
                            </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </main>  
        </div>
    </body>



    <?php
    include "footer.php";
    ?>
</html>