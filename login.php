<html>
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured - Login</title>
    </head>
    <body>    
        <?php
        include "navbar.php";
        ?>
        <br/>
        <br/>
        <br/>
        <main class="container">        
            <h1>Member Login</h1>
            <p> 
                For new members, please go to the <a href="register.php">Registration page</a>.        
            </p>        
            <form action="process_login.php" method="post">            
                <div class="form-group">
                    <label for="email">Email:</label>            
                    <input class="form-control" type="email" id="email" name="email"                   
                           required name="email" placeholder="Enter email">            
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>            
                    <input class="form-control" type="password" id="pwd"                   
                           required name="pwd" placeholder="Enter password">             
                </div>
                <div>
                    <button class="btn btn-primary mb1 bg-teal" type="submit">Submit</button>   
                </div>
            </form>    
        </main>    
        <?php
        include "footer.php";
        ?>
    </body>
</html>