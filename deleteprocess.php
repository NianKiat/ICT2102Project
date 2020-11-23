<?php
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
?>
<html>

    <head>
        <?php
        require 'dbconfig.php';
        include 'header.php';
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
        if ($_SESSION['role'] == "Admin"){
           include 'navbar.php'; 
        }
        ?>
        <main class="container">
            <div>
                <?php
                $email = $emailerrorMsg = "";
                $userid = $useriderrorMsg = "";
                $success = false;
                if ($_SESSION['role'] == "Admin") {
                    if (empty($_POST["userid"])) {
                        if (empty($_POST["email"])) {
                            $emailerrorMsg .= "Please enter the E-mail address or User ID of the member you wish to remove.";
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
                } else if ($_SESSION['role'] == "Member"){
                    if(empty($_POST["confirmdelete"])){
                        $emailerrorMsg .= "Please enter 'Yes' if you wish to delete your account.";
                        $success = false;
                    } else{
                        $check = sanitize_input($_POST["confirmdelete"]);
                        if ($check == "yes" || $check == "Yes"){
                            $userid = $_SESSION['memberID'];
                            $success = true;
                        }
                        
                    }
                }




                if ($success) {
                    deletefromdb();
                }
                if ($success) {
                    if ($_SESSION['role'] == "Member"){
                        session_destroy();
                    }
                    echo "<br>";
                    echo "<h1>User has been removed.</h1>";
                    echo "<br>";
                    //echo "<h2 style='text-decoration: none'>Thank You for joining PETS!, $fname $lname</h2>";
                    echo "<div class='form-group'>"; ?>
                <button type="button" onclick="window.location.href = 'index.php'" class="btn btn-success">Redirect me to home!</button></div>
               
                    <?php 
               
                } else {
                    echo "<br>";
                    echo "<h1>Oops!</h1>";
                    echo "<h2 style='text-decoration: none'>The following input errors were detected:</h2>";
                    echo "<p>" . $emailerrorMsg . $useriderrorMsg . "</p>";
                    echo "<div class='form-group'>";
                    echo "<button onclick='history.back()' type='button' class='btn btn-danger' style='background-colour: red;' type='button'>Return to Sign Up</button>";
                    echo "</div>";
                }

//Helper function that checks input for malicious or unwanted content.
                function sanitize_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                /*
                 * Helper function to write the member data to the DB
                 */

                function deletefromdb() {
                    global $email, $userid;
// Create database connection.
                    //$config = parse_ini_file('../../private/db-config.ini');
                    // $conn = new mysqli($config['servername'], $config['username'],
                    //        $config['password'], $config['dbname']);
                    $conn = OpenCon();
// Check connection
                    if ($conn->connect_error) {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    } else {
// Prepare the statement:
// Bind & execute the query statements           
                        $stmt = $conn->prepare("DELETE FROM fmembers WHERE memberID=? OR email=?");
                        $stmt->bind_param('is', $userid, $email);
                        if (!$stmt->execute()) {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        $stmt->close();
                    }
                    $conn->close();
                }
                ?>
            </div>
        </main>
        <?php
        include "footer.php";
        ?>
    </body>
</html>



