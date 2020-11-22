<!DOCTYPE html>
<html lang = "en">
    <head>
    <?php
    include 'header.php';
    ?>
            <title>Floured - Manager Register</title>
    </head>
    <body>
        <?php
        include 'm.navbar.php';
        ?>
        <br>
        <main class="container">
            <h1>Member Registration</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input class="form-control" type="text" id="fname" 
                           minlength="1" maxlength="45" name="fname" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" type="text" id="lname" required
                           minlength="1" maxlength="45" name="lname" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" required
                           name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" type="password" id="pwd" required
                           name="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="pwd_confirm">Confirm Password:</label>
                    <input class="form-control" type="password" id="pwd_confirm" required
                           name="pwd_confirm" placeholder="Confirm password">
                </div>
                <div class="form-check">
                    <label>
                        <input type="checkbox" name="role">
                        Make this user an admin
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" required name="agree">
                        Agree to terms and conditions
                    </label>
                </div>
                <br>
                <div class="centralized">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
        </main>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
