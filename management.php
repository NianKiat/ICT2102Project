<?php
require 'dbconfig.php';
include 'sessiontest.php';
include 'adminTraverseSecurity.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured - Management</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <div class="album py-5 bg-light">
            <div class="container">
                <h1 class="display-4">Overview:</h1>
                <br>
                <div class="card border-dark mb-3">
                    <div class="card-header">Registered Users</div>
                    <div class="card-body text-primary">


                        <main role="main" class="col-md-9 ml-sm-auto col-lg-auto px-md-auto">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>MemberID:</th>
                                            <th>First Name:</th>
                                            <th>Last Name:</th>
                                            <th>E-mail:</th>
                                            <th>Address:</th>
                                            <th>Contact:</th>
                                            <th>Gender:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = OpenCon();
                                        if ($conn->connect_error) {
                                            $errorMsg = "Connection failed: " . $conn->connect_error;
                                        } else {
                                            $stmt = $conn->prepare("SELECT * FROM fmembers WHERE role = 'Member'");
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row['memberID'] ?></td>
                                                    <td><?php echo $row['fname'] ?></td>
                                                    <td><?php echo $row['lname'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>
                                                    <td><?php echo $row['contact'] ?></td>
                                                    <td><?php echo $row['gender'] ?></td>
                                                </tr>



                                                <?php
                                            }
                                        }
                                        ?>



                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="album py-5 bg-light">
            <div class="container">
                <div class="card border-dark mb-3">
                    <div class="card-header">Admin Users</div>
                    <div class="card-body text-primary">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>MemberID:</th>
                                        <th>First Name:</th>
                                        <th>Last Name:</th>
                                        <th>E-mail:</th>
                                        <th>Address:</th>
                                        <th>Contact:</th>
                                        <th>Gender:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conn = OpenCon();
                                    if ($conn->connect_error) {
                                        $errorMsg = "Connection failed: " . $conn->connect_error;
                                    } else {
                                        $stmt = $conn->prepare("SELECT * FROM fmembers WHERE role = 'Admin'");
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>

                                            <tr>
                                                <td><?php echo $row['memberID'] ?></td>
                                                <td><?php echo $row['fname'] ?></td>
                                                <td><?php echo $row['lname'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['address'] ?></td>
                                                <td><?php echo $row['contact'] ?></td>
                                                <td><?php echo $row['gender'] ?></td>
                                            </tr>



                                            <?php
                                        }
                                    }
                                    ?>



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
