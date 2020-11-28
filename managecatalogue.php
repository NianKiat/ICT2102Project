<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        require 'adminTraverseSecurity.php';
        include 'navbar.php';
        include 'header.php';
        ?>
        <title>Floured - Manage Items</title>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Manage Items</h1>
                <p class="lead">Navigate using the buttons below.</p>

                <button type="button" onclick="window.location.href = 'm.additem.php'" class="btn btn-secondary btn-lg btn-block">Add New Item</button>

                <button type="button" onclick="window.location.href = 'm.itemupdate.php'" class="btn btn-secondary btn-lg btn-block">Update/Remove Item Information</button>

            </div>
        </div>

    </body>
    <?php
    include 'footer.php';
    ?>
</html>
