<?php
require "dbconfig.php";
if (isset($_GET['vkey'])) {
    $vkey = $_GET['vkey'];

    $conn = OpenCon();
    $result = $conn->query("SELECT vkey, verified FROM fmembers WHERE verified=0 AND vkey='$vkey'");
    if ($result->num_rows > 0) {
        $update = $conn->query("UPDATE fmembers SET verified = 1 WHERE vkey='$vkey' LIMIT 1");

        if ($update) {
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

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>Congratulations!</h1>
                            <h3>Your account has been verified!</h3>
                            <button class='btn btn-success' onclick="window.location.href = 'login.php'" style='background-colour: green;' type='button'>Login Now!
                        </div>
                    </div>
                </body>
                <?php
                include 'footer.php';
                ?>
            </html>

        <?php
        } else {
            echo $mysqli->error;
        }
    } else {
        echo "Invalid request or Account already verified";
    }
} else {
    die("Something went wrong");
}    