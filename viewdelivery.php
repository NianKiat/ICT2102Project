<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        $link = mysqli_connect("localhost", "root", "", "deliverydate");

        // Check connection
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        include 'header.php';
        ?>
        <title>Floured</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <br/>
        <br/>
        <br/>
        <main class="container">        
            <h1>View Delivery Date</h1>
            <div class="card border-dark mb-3">
                <div class="card-header">Your Date</div>
                <div class="card-body text-primary">
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-auto px-md-auto">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm" id="tabledate">
                                <thead>
                                    <tr>
                                        <th>Cakes</th>
                                        <th>Date</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM deliverydate WHERE memberid = '2'";
                                    if ($result = $link->query($query)) {
                                        while ($row = $result->fetch_assoc()) {
                                            $field1name = $row["id"];
                                            $field2name = $row["memberid"];
                                            $field3name = $row["date"];
                                            ?>     
                                            <tr id="delete<?php echo $field1name; ?>"> 

                                                <td><?php echo $field2name; ?></td> 
                                                <td><?php echo $field3name; ?></td>
                                                <td style="text-align:right;">                                    
                                                    <form action="deliveryedit.php" method="POST">
                                                        <button name="editdate" value="<?php echo $field1name; ?>" >Change date</button>
                                                    </form>
                                                </td>
<!--                                                <td style="text-align:right;">                                         
                                                    <button name="deletedate" onclick="deleteAjax(<?php //echo $field1name; ?>)">Delete date</button>
                                                </td>-->
                                            </tr>
                                            <?php
                                        }
                                        //$result->free();
                                    } else {
                                        echo "error";
                                    }
                                    ?>
                                </tbody>
                                <script type="text/javascript">
                                    function deleteAjax(id) {
                                        $.ajax({
                                            type: 'post',
                                            url: 'deletedelivery.php',
                                            data: {delete_id: id},
                                            success: function (data) {
                                                $('#delete' + id).hide('slow');
                                            }
                                        });
                                    }
                                </script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                            </table>
                        </div>
                </div>
            </div>
        </main>    
    </body>
    <?php
    include 'footer.php';
    ?>
</html>

