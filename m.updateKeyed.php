<?php
require 'dbconfig.php';
include 'sessiontest.php';
include 'adminTraverseSecurity.php';
$userid = '';
$email = '';
$success = false;
$emailerrorMsg = '';
$thisfName = '';
$thislName = '';
$thisemail = '';
$thiscontact = '';
$thisaddress = '';
$thisrole = '';
$thisgender = '';

if (empty($_POST["userid"])) {
    if (empty($_POST["email"])) {
        $emailerrorMsg .= "Please enter the E-mail address or User ID of the member you wish to update.";
    } else {
        $email = sanitize_input($_POST["email"]);
        $success = true;
// Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerrorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }
} else {
    $userid = sanitize_input($_POST["userid"]);
    $success = true;
    if (!filter_var($userid, FILTER_SANITIZE_STRING)) {
        $useriderrorMsg .= "Invalid contact characters";
        $success = false;
    }
}

if ($success) {
    getUser();
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getUser() {
    global $success, $userid, $email, $thisfName, $thislName, $thisemail, $thiscontact, $thisaddress, $thisrole, $thisgender;
    $conn = OpenCon();
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
// Prepare the statement:
        $stmt = $conn->prepare("SELECT * FROM fmembers WHERE email=? OR memberID=?");
// Bind & execute the query statement:
        $stmt->bind_param('ss', $email, $userid);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
// Note that email field is unique, so should only have
// one row in the result set.
            $row = $result->fetch_assoc();
            $thisfName = $row["fname"];
            $thislName = $row["lname"];
            $thisemail = $row['email'];
            $thiscontact = $row["contact"];
            $thisaddress = $row["address"];
            $thisrole = $row["role"];
            $thisgender = $row["gender"];

            $_SESSION['updatekey'] = $row["memberID"];
        } else {
            $errorMsg = "User not found.";
            $success = false;
        }
        $stmt->close();
    }
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured - Update</title>
    </head>
    <style>
        .responsive {
            width: 100%;
            /*  max-width: 400px;*/
            height: auto;

        }
    </style>
    <body>

        <?php
        include 'navbar.php';
        ?>
        <br/>
        <br/>
        <br/>

        <div class="row">

            <main class="container">  
                <div class ="card mb-3" >
                    <div class="row no-gutters">
                        <?php if ($success) { ?>
                            <?php if ($thisgender == 'Male') { ?>
                                <img src="images/img_avatar.png" style="width: 500px " class="card-img-top" alt="profileimg"/>
                            <?php } else if ($thisgender == 'Female') { ?>
                                <img src="images/img_avatar2.png" style="width: 500px" class="card-img-top" alt="profileimg"/>
                            <?php } ?>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col">
                                        <form action="m.updateprocess.php" method="post">            



                                            <div class="form-group">
                                                <label for="fname">First Name:</label>            
                                                <input class="form-control" type="text" id="fname" name="fname"                   
                                                       placeholder="Enter first name" value="<?php echo $thisfName ?>">            
                                            </div>
                                            <div class="form-group">
                                                <label for="lname">Last Name:</label>             
                                                <input class="form-control" type="text" id="lname" name="lname"                   
                                                       required name="lname" placeholder="Enter last name" value="<?php echo $thislName ?>">             
                                            </div>
                                            <div class="form-group">

                                                <?php if ($thisgender == 'Male') { ?>
                                                    <p>Please select gender:</p>
                                                    <input type="radio" id="male" name="gender" checked value="Male">
                                                    <label for="male">Male</label><br>
                                                    <input type="radio" id="female" name="gender" value="Female">
                                                    <label for="female">Female</label><br>
                                                <?php } else if ($thisgender == 'Female') { ?>
                                                    <p>Please select gender:</p>
                                                    <input type="radio" id="male" name="gender" checked value="Male">
                                                    <label for="male">Male</label><br>
                                                    <input type="radio" id="female" name="gender" value="Female" checked>
                                                    <label for="female">Female</label><br>
                                                <?php } ?>



                                            </div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email:</label>            
                                            <input class="form-control" type="email" id="email" name="email"                   
                                                   required name="email" placeholder="Enter email" value="<?php echo $thisemail ?>">            
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Contact:</label>            
                                            <input class="form-control" type="contact" id="contact" name="contact"                   
                                                   required name="number" placeholder="Enter contact" value="<?php echo $thiscontact ?>">            
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address:</label>            
                                            <input class="form-control" type="text" id="address" name="address"                   
                                                   required name="address" placeholder="Enter address" value="<?php echo $thisaddress ?>">            
                                        </div>
                                        <div class="form-check">
                                            <label>
                                                <?php if ($thisrole == 'Admin') { ?>
                                                    <p>Revert Admin Rights?:</p>
                                                    <input type="radio" id="female" name="role" value="Member">
                                                    <label for="role">Yes</label><br>
                                                    <input type="radio" id="male" name="role" checked value="Admin">
                                                    <label for="role">No</label><br>
                                                <?php } else { ?>
                                                    <p>Make this user an Admin?:</p>
                                                    <input type="radio" id="female" name="role" value="Admin">
                                                    <label for="role">Yes</label><br>
                                                    <input type="radio" id="male" name="role" checked value="Member">
                                                    <label for="role">No</label><br>
                                                <?php } ?>

                                            </label>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                </div>
                                <br>
                                <div>
                                    <button class="btn btn-primary mb1 bg-teal" type="submit">Save Changes</button>   
                                </div>
                                </form>    
                            </div>

                        <?php } else {
                            ?>
                            <h1 class='section_heading' style='text-align:center'>There is no such user!</h1>

                        <?php }
                        ?>

                    </div>
                </div>
            </main>    
        </div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
