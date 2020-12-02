<?php
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
?>
<html lang="en">

    <head>
        <?php
        require 'dbconfig.php';
        include 'header.php';
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <main class="container">
            <div>
                <?php
                if ($_SESSION['role'] == "Admin") {
                    $id = $_SESSION['updatekey'];
                } else {
                    $id = $_SESSION['memberID'];
                }
                $email = $emailerrorMsg = "";
                $lname = $lnameerrorMsg = "";
                $fname = $fnameerrorMsg = "";
                $address = $addresserrorMsg = "";
                $contact = $contacterrorMsg = "";
                $gender = $gendererrorMsg = "";
                $role = "";

                $lnamesuccess = true;
                $contactsuccess = true;
                $addresssuccess = true;
                $gendersuccess = true;

                $emailsuccess = true;
                $fnamesuccess = true;
                $success = true;
                $pwd_hashed = '';
                $errorMsg = '';


                if (empty($_POST["fname"])) {
                    $fnameerrorMsg .= "First name is required.<br>";
                    $fnamesuccess = false;
                } else {
                    $fname = sanitize_input($_POST["fname"]);
                    if (!filter_var($fname, FILTER_SANITIZE_STRING)) {
                        $fnameerrorMsg .= "Invalid first name characters";
                        $fnamesuccess = false;
                    }
                }

                if (empty($_POST["gender"])) {
                    $gendererrorMsg .= "Gender is required.<br>";
                    $gendersuccess = false;
                } else {
                    $gender = sanitize_input($_POST["gender"]);
                    if (!filter_var($gender, FILTER_SANITIZE_STRING)) {
                        $gendererrorMsg .= "Invalid Gender characters";
                        $gendersuccess = false;
                    }
                }

                if (empty($_POST["contact"])) {
                    $contacterrorMsg .= "contact is required.<br>";
                    $contactsuccess = false;
                } else {
                    $contact = sanitize_input($_POST["contact"]);
                    if (!filter_var($contact, FILTER_SANITIZE_STRING)) {
                        $contacterrorMsg .= "Invalid contact characters";
                        $contactsuccess = false;
                    }
                }

                if (empty($_POST["lname"])) {
                    $lnameerrorMsg .= "Last Name is required.<br>";
                    $lnamesuccess = false;
                } else {
                    $lname = sanitize_input($_POST["lname"]);
                    if (!filter_var($lname, FILTER_SANITIZE_STRING)) {
                        $lnameerrorMsg .= "Invalid last name characters";
                        $lnamesuccess = false;
                    }
                }

                if (empty($_POST["address"])) {
                    $addresserrorMsg .= "Last Name is required.<br>";
                    $addresssuccess = false;
                } else {
                    $address = sanitize_input($_POST["address"]);
                    if (!filter_var($address, FILTER_SANITIZE_STRING)) {
                        $addresserrorMsg .= "Invalid last name characters";
                        $addresssuccess = false;
                    }
                }

                if (empty($_POST["role"])) {
                    $role = "Member";
                } else {
                    $role = sanitize_input($_POST["role"]);
                }



                if (empty($_POST["email"])) {
                    $emailerrorMsg .= "Email is required.<br>";
                    $emailsuccess = false;
                } else {
                    $email = sanitize_input($_POST["email"]);
// Additional check to make sure e-mail address is well-formed.
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailerrorMsg .= "Invalid email format.<br>";
                        $emailsuccess = false;
                    }
                }

                if (empty($_POST["role"])) {
                    $role = "Member";
                } else {
                    $role = sanitize_input($_POST["role"]);
                }


                // check for database
                if ($contactsuccess && $addresssuccess && $emailsuccess && $fnamesuccess && $lnamesuccess && $gendersuccess) {
                    updateMemberToDB();
                }

                if ($contactsuccess && $addresssuccess && $emailsuccess && $lnamesuccess && $fnamesuccess && $success && $gendersuccess) {

                    if ($_SESSION['role'] == 'Member') {
                        $_SESSION['fname'] = $fname;
                        $_SESSION['lname'] = $lname;
                        $_SESSION['role'] = $role;
                        $_SESSION['contact'] = $contact;
                        $_SESSION['email'] = $email;
                        $_SESSION['address'] = $address;
                        $_SESSION['gender'] = $gender;

                        echo "<br>";
                        echo "<h1 class='section_heading' style='text-align:center'>Your Profile is Successfully Updated!</h1>";
                        echo "<br>";
                        echo "<h2 style='text-align:center'>Account with email: $email, has been updated</h2>";
                        echo "<br>";
                        echo "<div class='form-group'>";
                        ?> <button class='btn btn-info button_forms btn-block' onclick="window.location.href = 'index.php'" style='background-colour: red;' type='button'>Redirect me to home!

                            <?php
                            echo "</div>";
                            echo "<br>";
                        } else {
                            echo "<br>";
                            echo "<h1 class='section_heading' style='text-align:center'>Profile is Successfully Updated!</h1>";
                            echo "<br>";
                            echo "<h2 style='text-align:center'>Account with email: $email, has been updated</h2>";
                            echo "<br>";
                            echo "<div class='form-group'>";
                            ?> <button class='btn btn-info button_forms btn-block' onclick="window.location.href = 'manageuser.php'" style='background-colour: red;' type='button'>Go back

                            <?php
                            echo "</div>";
                            echo "<br>";
                        }
                    } else {
                        echo "<br>";
                        echo "<h1 class='section_heading' style='text-align:center'>Oops!</h1>";
                        echo "<br>";
                        echo "<h2 style='text-decoration: none'>The following input errors were detected:</h2>";
                        echo "<p>" . $emailerrorMsg . $fnameerrorMsg . $addresserrorMsg . $contacterrorMsg . $lnameerrorMsg . $errorMsg . $gendererrorMsg . "</p>";
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

                    function updateMemberToDB() {
                        global $role, $fname, $lname, $email, $errorMsg, $success, $address, $contact, $id, $gender;
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
                            $stmt = $conn->prepare("UPDATE fmembers SET fname='$fname', lname='$lname', email='$email', address='$address', contact='$contact', role='$role', gender='$gender' WHERE memberID='$id'");
//                        $stmt->bind_param('sssssii', $fname, $lname, $email, $pwd_hashed, $address, $contact, $id);

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



