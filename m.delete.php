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
        <title>Floured - Manager Delete</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br>
        <main class="container">
            <h1 class="section_heading" style="text-align: center">Delete Member From Floured!</h1>
            <br>
            <form action="deleteprocess.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email"
                           name="email" placeholder="Enter email">
                </div>
                <br>
                  <h2 class="section_heading" style="text-align: center">OR</h2>
                <br>
                <div class="form-group">
                    <label for="userid">User ID:</label>
                    <input class="form-control" type="text" id="userid"
                           name="userid" placeholder="Enter User ID">
                </div>
                <br>
                <div class="form-group">
                    <button class="btn button_forms btn-info btn-block" type="submit">Delete</button>
                </div>
                <br>
        </main>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
