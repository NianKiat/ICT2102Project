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
                                            <label for="fname"><b>Name:</b></label> 
                                            <br>

                                            <p><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?>   </p>       
                                        </div>

                                        <div class="form-group">
                                            <label for="email"><b>Email:</b></label> 
                                            <br>
                                            <p><?php echo $_SESSION['email'] ?>     </p>  
                                        </div>
                                        <div class="form-group">
                                            <label for="contact"><b>Contact:</b></label>  
                                            <br>
                                            <p><?php echo $_SESSION['contact'] ?>   </p>         
                                        </div>
                                        <div class="form-group">
                                            <label for="address"><b>Address:</b></label>  
                                            <br>
                                            <p><?php echo $_SESSION['address'] ?>   </p>         
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