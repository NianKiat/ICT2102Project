<?php
include 'sessiontest.php';
include 'adminTraverseSecurity.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured - Manager Update</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br>
        <main class="container">
            <h1>Update Member Information</h1>
            <h3>Enter User E-mail or ID</h3>
            <form action="m.updateKeyed.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email"
                           name="email" placeholder="Enter email">
                </div>
                <br>
                <h2>OR</h2>
                <br>
                <div class="form-group">
                    <label for="userid">User ID:</label>
                    <input class="form-control" type="text" id="userid"
                           name="userid" placeholder="Enter User ID">
                </div>

                <br>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
        </main>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
