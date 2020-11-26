<?php
include 'sessiontest.php';
include 'memberTraverseSecurity.php';
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
                <h1 class="display-4">User Settings</h1>
                <p class="lead">Account Management.</p>

                <button type="button" onclick="window.location.href = 'passwordchange.php'" class="btn btn-secondary btn-lg btn-block">Change Password</button>
                <button type="button" onclick="window.location.href = 'deleteaccount.php'" class="btn btn-secondary btn-lg btn-block">Deactivate Account</button>

            </div>
        </div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
