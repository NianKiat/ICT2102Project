<!DOCTYPE html>
<html lang = "en">
    <head>
    <?php
    include 'adminTraverseSecurity.php';
    include 'header.php';
    include 'm.navbar.php';
    ?>
        <title>Floured - Manage User</title>
    </head>
    <body>
        <?php
        ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Manage Users</h1>
                <p class="lead">Navigate using the buttons below.</p>

                <button type="button" onclick="window.location.href = 'm.register.php'" class="btn btn-secondary btn-lg btn-block">Add New Item</button>

                <button type="button" onclick="window.location.href = 'm.update.php'" class="btn btn-secondary btn-lg btn-block">Update Item Information</button>

                <br>
                
            </div>
        </div>

    </body>
    <?php
    include 'footer.php';
    ?>
</html>
