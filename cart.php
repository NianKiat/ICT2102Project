<?php
require 'dbconfig.php';
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

<body class="skin-light">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="navbar">
    <a class="navbar-brand" href="index.php">
<!--        <img class="logo" src="" alt="Floured"
             title="Homepage"/>-->
        <?php
        if (isset($_SESSION['fname'])) {
            if ($_SESSION['role'] == 'Admin') {
                echo "Floured! Admin";
            }
        } else {
            echo "Floured!";
        }
        ?>

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expand" aria-controls="expand" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="expand">  
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>

            </li> 
            <?php
            if (isset($_SESSION['fname'])) {
                if ($_SESSION['role'] == 'Admin') {
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="manageuser.php">User Management<span class="sr-only"></span></a>
                    </li> 

                    <li class="nav-item active">
                        <a class="nav-link" href="managecatalogue.php">Product Management<span class="sr-only"></span></a>
                    </li> 
                    <?php
                } else if ($_SESSION['role'] == 'Member'){ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="viewdelivery.php">Delivery<span class="sr-only"></span></a>
                    </li>
                <?php
                
                }
            }
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="catalogue.php">Catalogue</a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="EmbeddedMaps.php">Store Information</a>
            </li>    



        </ul>
        <ul class="navbar-nav">

            <?php
            if (isset($_SESSION['fname'])) {
                if ($_SESSION['role'] == 'Member') {
                    ?>
                    <li class="nav-item" >
                        <a class="nav-link" href="cart.php"><i style="font-size:20px;" class="fas fa-shopping-cart"></i> Cart</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size:20px;" class="fa fa-user"></i> <?php echo $_SESSION['fname'] ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">My Profile</a>
                            <a class="dropdown-item" href="passwordchange.php">Change my Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="settings.php">Settings</a>
                        </div>
                    </li
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i style="font-size:20px;" class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>

                    <?php
                }
                if ($_SESSION['role'] == 'Admin') {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="management.php"><i style="font-size:20px;" class="fas fa-sliders-h"></i> Management Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i style="font-size:20px;" class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                    <?php
                }
            } else {
                ?>
                <li class="nav-item active" >
                    <a class="nav-link" href="cart.php"><i style="font-size:20px;" class="fas fa-shopping-cart"></i> Cart</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i style="font-size:20px;" class="fa fa-user"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i style="font-size:20px;" class="fa fa-sign-in-alt"></i> Login</a>
                </li>
            <?php }
            ?> 


        </ul>
    </div>
</nav>
<br>
<br>

  </header>
  <!--Main Navigation-->
  

  <!--Main layout-->
  <main>
    
    <?php
        $conn = OpenCon();
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT dimension, price, imgurl, quantity, name, cartid FROM shoppingcart WHERE memberid = " . $_SESSION['memberID'];
        $result = $conn->query($sql);
    
    ?>
      
      <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-1">
            <h2 class="mb-0"><strong>Shopping Cart</strong></h2>
        </div>
      </div>
    </div>
      
    <div class="container" id="mydiv">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Card -->
            
            
            <h5 class="mb-4">Shopping Cart items:</h5>
            <?php
                while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="card wish-list mb-4" id="delete<?php echo $row["cartid"];?>">
                <div class="card-body">
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100" src="<?php echo $row["imgurl"]; ?>" alt="Sample">
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5><?php echo $row["name"]; ?></h5>
                          <p class="mb-2 text-muted text-uppercase small"><?php echo "Dimension: " . $row["dimension"]; ?></p>
                        </div>
                        <div>
                          <div>
                                <button type="submit" name="increase" id="increase" class="fa fa-plus" onclick="increaseAjax(<?php echo $row["cartid"]; ?>,<?php echo $row["quantity"]; ?>)"
                                        style="border-color:transparent; background-color:transparent; float:right; height:30px"></button>

                                <input onchange="updateAjax(<?php echo $row["cartid"]; ?>,this.value)" min="0" id="quantity" name="quantity" value="<?php echo $row["quantity"]; ?>" 
                                       type="number" style="text-align:center; width:50%; float:right; height:30px">

                                <button type="submit" name="decrease" id="decrease" class="fa fa-minus" onclick="decreaseAjax(<?php echo $row["cartid"]; ?>,<?php echo $row["quantity"]; ?>)"
                                        style="border-color:transparent; background-color:transparent; float:right; height:30px" ></button>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                            
                                <button style="border-color:transparent; background-color:transparent; color:blue;" id="deleteItem" name="deleteItem" type="submit" class="card-link-secondary small text-uppercase mr-3" 
                                        onclick="deleteAjax(<?php echo $row["cartid"]; ?>)" ><i class="fas fa-trash-alt mr-1" ></i>Remove Item</button>
                                
                            
                        </div>
                        <p class="mb-0"><span><strong>$ <?php echo $row["price"]; ?></strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php  
                }  
            ?> 
            <script type="text/javascript">
                function deleteAjax(id) {
                    $.ajax({
                    type: 'post',
                    url: 'deleteCart.php',
                    data: {delete_id: id},
                    success: function (data) {
                        $('#mydiv').load(location.href + " #mydiv");
                    }
                    });
                }
                function decreaseAjax(id, quantity) {
                    $.ajax({
                    type: 'post',
                    url: 'decreaseCart.php',
                    data: {update_id: id,
                            quantity: quantity},
                    success: function (data) {
                        $('#mydiv').load(location.href + " #mydiv");
                    }
                    });
                }
                function increaseAjax(id, quantity) {
                    $.ajax({
                    type: 'post',
                    url: 'increaseCart.php',
                    data: {update_id: id,
                            quantity: quantity},
                    success: function (data) {
                        $('#mydiv').load(location.href + " #mydiv");
                    }
                    });
                }
                function updateAjax(id, quantity) {
                    $.ajax({
                    type: 'post',
                    url: 'updateCart.php',
                    data: {update_id: id,
                            quantity: quantity},
                    success: function (data) {
                        $('#mydiv').load(location.href + " #mydiv");
                    }
                    });
                }
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- Card -->

            <!-- Card -->
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="mb-4">We accept</h5>
                <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png" width='200px'>
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4">

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-3">Total amount:</h5>
                <?php
                    $sql = "SELECT name, (price*quantity) AS tPrice FROM shoppingcart WHERE memberid = " . $_SESSION['memberID'];
                    $result = $conn->query($sql);
                    while($row = mysqli_fetch_array($result)) {
                ?>
                <ul class="list-group list-group-flush">
                  <li id="item" class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    <?php echo $row["name"];?>
                    <span>$ <?php echo $row["tPrice"];?></span>
                  </li>
                  <?php
                    }
                  ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    <span></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                    </div>
                    <span><strong>$
                        <?php 
                            $sql2 = "SELECT (SUM(price*quantity)) AS totalsum FROM shoppingcart WHERE memberid = " . $_SESSION['memberID']; 
                            $result2 = $conn->query($sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $sum = $row2['totalsum'];
                            echo $sum;
                        ?>
                        </strong></span>
                  </li>
                </ul>
                <form action="payment.php" method="POST">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Checkout</button>
                </form>
              </div>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Block Content-->

    </div>
    

  </main>
  <!--Main layout-->
</body>

<?php
    include 'footer.php';
?>

</html>