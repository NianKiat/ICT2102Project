<!DOCTYPE html>
<html lang = "en">
    <head>
    <?php
    include 'header.php';
    ?>
        <title>Floured - Manage User</title>
    </head>
    <body>
        <?php
        include 'm.navbar.php';
        ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Manage Users</h1>
                <p class="lead">Navigate using the buttons below.</p>

                <button type="button" onclick="window.location.href = 'm.register.php'" class="btn btn-secondary btn-lg btn-block">Register A User</button>

                <button type="button" onclick="window.location.href = 'm.update.php'" class="btn btn-secondary btn-lg btn-block">Update User Info</button>

                <button type="button" onclick="window.location.href = 'm.delete.php'" class="btn btn-secondary btn-lg btn-block">Delete A User</button>
                <br>
                <div class="card border-dark mb-3">
                    <div class="card-header">Registered Users</div>
                    <div class="card-body text-primary">


                        <main role="main" class="col-md-9 ml-sm-auto col-lg-auto px-md-auto">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Header</th>
                                            <th>Header</th>
                                            <th>Header</th>
                                            <th>Header</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1,001</td>
                                            <td>Lorem</td>
                                            <td>ipsum</td>
                                            <td>dolor</td>
                                            <td>sit</td>
                                        </tr>
                                        <tr>
                                            <td>1,002</td>
                                            <td>amet</td>
                                            <td>consectetur</td>
                                            <td>adipiscing</td>
                                            <td>elit</td>
                                        </tr>
                                        <tr>
                                            <td>1,003</td>
                                            <td>Integer</td>
                                            <td>nec</td>
                                            <td>odio</td>
                                            <td>Praesent</td>
                                        </tr>
                                        <tr>
                                            <td>1,003</td>
                                            <td>libero</td>
                                            <td>Sed</td>
                                            <td>cursus</td>
                                            <td>ante</td>
                                        </tr>
                                        <tr>
                                            <td>1,004</td>
                                            <td>dapibus</td>
                                            <td>diam</td>
                                            <td>Sed</td>
                                            <td>nisi</td>
                                        </tr>
                                        <tr>
                                            <td>1,005</td>
                                            <td>Nulla</td>
                                            <td>quis</td>
                                            <td>sem</td>
                                            <td>at</td>
                                        </tr>
                                        <tr>
                                            <td>1,006</td>
                                            <td>nibh</td>
                                            <td>elementum</td>
                                            <td>imperdiet</td>
                                            <td>Duis</td>
                                        </tr>
                                        <tr>
                                            <td>1,007</td>
                                            <td>sagittis</td>
                                            <td>ipsum</td>
                                            <td>Praesent</td>
                                            <td>mauris</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>

                
                <div class="card border-dark mb-3">
                    <div class="card-header">Admin Users</div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                        <th>Header</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Lorem</td>
                                        <td>ipsum</td>
                                        <td>dolor</td>
                                        <td>sit</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <?php
    include 'footer.php';
    ?>
</html>
