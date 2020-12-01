<html>
    <?php
    include 'sessiontest.php';
    require 'dbconfig.php';
    include "header.php";
    ?>
    <body>

        <main class="container">
            <div>
                <?php
                $fname = '';
                $lname = '';
                $email = '';
                $memberID = '';
                $role = '';
                $contact = '';
                $address = '';
                $gender = '';
                $pwd = '';
                $pwd_hashed = '';
                $errorMsg = '';
                $success = True;

                //check if E-mail is empty
                if (empty($_POST["email"])) {
                    $errorMsg .= "Email is required.<br>";
                    $success = false;
                } else {
                    $email = sanitize_input($_POST["email"]);
// Additional check to make sure e-mail address is well-formed.
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errorMsg .= "Invalid email format.<br>";
                        $success = false;
                    }
                }

                if (empty($_POST["pwd"])) {
                    $errorMsg .= "Password is required.<br>";
                    $success = false;
                }

                authenticateUser();
                ?>
                <?php
//                include "navbar.php";
                ?>
                <?php
                if ($success) {
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['memberID'] = $memberID;
                    $_SESSION['role'] = $role;
                    $_SESSION['contact'] = $contact;
                    $_SESSION['email'] = $email;
                    $_SESSION['address'] = $address;
                    $_SESSION['gender'] = $gender;
                    $_SESSION['verified'] = $verified;
                    
                    echo "<br>";
                    echo "<h1>Login successful!</h1>";
                    echo "<h4 style='text-decoration: none'>Welcome back, $fname $lname</h4>";
                    echo "<div class='form-group'>";
                    ?> <button class='btn btn-success' onclick="window.location.href = 'index.php'" style='background-colour: green;' type='button'>Start Browsing!
                    <?php
                    echo "</div>";
                    
                } else {
                    echo "<br>";
                    echo "<h1>Oops!</h1>";
                    echo "<h2 style='text-decoration: none'>The following input errors were detected:</h2>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<div class='form-group'>";
                    echo "<button onclick='history.back()' type='button' class='btn btn-danger' style='background-colour: yellow;' type='button'>Return to Sign Up</button>";
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
                 * Helper function to authenticate the login.
                 */

                function authenticateUser() {
                    global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success, $memberID, $role, $contact, $address, $gender, $verified;
// Create database connection.
//                    $config = parse_ini_file('../../private/db-config.ini');
//                    $conn = new mysqli($config['servername'], $config['username'],
//                            $config['password'], $config['dbname']);
//                            
// Check connection
                    $conn = OpenCon();
                    if ($conn->connect_error) {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    } else {
// Prepare the statement:
                        $stmt = $conn->prepare("SELECT * FROM fmembers WHERE email=?");
// Bind & execute the query statement:
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        if ($result->num_rows > 0) {
// Note that email field is unique, so should only have
// one row in the result set.
                            $row = $result->fetch_assoc();
                            $fname = $row["fname"];
                            $lname = $row["lname"];
                            $pwd_hashed = $row["password"];
                            $memberID = $row["memberID"];
                            $role = $row["role"];
                            $contact = $row["contact"];
                            $address = $row["address"];
                            $gender = $row["gender"];
                            $verified = $row["verified"];




// Check if the password matches:
                            if (!password_verify($_POST["pwd"], $pwd_hashed)) {
// Don't be too specific with the error message - hackers don't
// need to know which one they got right or wrong. :)
                                $errorMsg = "Email not found or password doesn't match...";
                                $success = false;
                            }
                        } else {
                            $errorMsg = "Email not found or password doesn't match...";
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



