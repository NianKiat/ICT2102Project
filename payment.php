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
    <body>
        <?php
        include 'navbar.php';
        ?>
        <main>
        <?php
            $conn = OpenCon();
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
        
            $sql2 = "SELECT (SUM(price*quantity)) AS totalsum FROM shoppingcart WHERE memberid = " . $_SESSION['memberID']; 
            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $sum = $row2['totalsum'];
            
        ?>
            
        <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV</h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <h6><strong>Total amount:</strong></h6>
                                <p class="mb-0"><span><strong>$ <?php echo $sum; ?></strong></span></p><br>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                            <br>
                            <h5><strong>Or pay using PayPal</strong></h5>
                            <br>
                            <div id="paypal-payment-button"></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </main>
    <script src="https://www.paypal.com/sdk/js?client-id=AUh4NMuhyjUVD1PGQsgBsNUEVgSq2NXdOgqQRLTbQ9roPyJwsMHLHvlStaj_NuGIP3VSyKoGm8GzUS7_&disable-funding=credit,card"></script>
    <script>
        paypal.Buttons({
            style :{
                color:'blue',
                shape:'pill'
            },
            createOrder:function(data, actions){
                return actions.order.create({
                    purchase_units:[{
                        amount:{
                            value:'<?php echo $sum; ?>'
                        }
                    }]
                });
            },
            onApprove:function(data, actions){
                return actions.order.capture().then(function(details){
                    console.log(details);
                    window.location.replace("http://54.145.106.172/1004Project/delivery.php");
                });
            },
            onCancel:function(data){
                window.location.replace("http://54.145.106.172/1004Project/cart.php");
            }
        }).render('#paypal-payment-button');
    </script>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
