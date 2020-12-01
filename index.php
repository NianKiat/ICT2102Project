<?php
include 'sessiontest.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Floured! Homepage</title>
    </head>
    <body>
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

            <li class="nav-item active">
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
            <li class="nav-item">
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
                <li class="nav-item" >
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
        <div id="banner_image" class="jumbotron jumbotron-fluid" role="main">
            <div class="container center">
                <h1 id="banner-header" style="color:lightblue">Singapore's Best Cake Delivery Outlet</h1>
              <h2 id="banner-subheader">same day delivery | no minimum order | award winning</h2>
              <h2 id="subheading" class="lead" style='color:lightpink; font-weight: 500; font-style:italic;'>Floured! brings you freshly-baked artisanal cakes delivered islandwide</h2>
            </div>
            <br>
            <div class="container center">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                        <a href="catalogue.php" id="banner_button_left" class="btn btn-info" role="button">View online catalogue</a>
                    </div>
                    <div class="col-md-4">
                        <a href="EmbeddedMaps.php" id="banner_button_right" class="btn btn-info" role="button">Walk-in our store</a>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
        <section class="jumbotron text-center section_wrap" role="contentinfo" aria-label="What sets us apart">
            <div class="container">
                <h1 class="jumbotron-heading section_heading">what sets us apart</h1>
                <hr class="section_break">
            </div>
            <div class="container">
                <div class="row" style="padding-top:1rem;">
                    <div class="col-12 col-md-6 col-lg-3"> <img id="acclaimed" class="card-img-top" src="../images/acclaimed1_large.png" alt="acclaimed"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="affordable" class="card-img-top" src="../images/affordable3_large.png" alt="affordable"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="more" class="card-img-top" src="../images/more3_large.png" alt="more choices"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="time" class="card-img-top" src="../images/time3_large.png" alt="1 hour express delivery"></div>
                </div>
            </div>
        </section>
        <section class="jumbotron text-center section_wrap" role="contentinfo" aria-label="Best Selling Cakes">
            <div class="container">
                <h1 class="jumbotron-heading section_heading">best selling cakes</h1>
                <hr class="section_break">
            </div>
        </section>
        <div class="album py-5 bg-light" style="padding-top:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                            <a href="catalogue.php" class="btn btn-info button_custom" role="button">shop all cakes</a>
                            <!--<button type="button" class="btn btn-info btn-lg button_custom">shop all cakes</button>-->
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <br>
        <section class="jumbotron text-center section_wrap" role="contentinfo" aria-label="Walk-in promotion">
            <div class="container">
                <h1 class="jumbotron-heading section_heading">walk-in promotion</h1>
                <hr class="section_break">
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="images/download.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                            <a href="EmbeddedMaps.php" class="btn btn-info button_custom" role="button">store location</a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <br>
        <section class="jumbotron section_wrap" role="contentinfo" aria-label="Frequently Asked Questions">
            <div class="container">
                <h1 class="jumbotron-heading section_heading" style="text-align:center;">frequently asked questions</h1>
                <hr class="section_break" style="width:40%;">
            </div>
            <div class="jumbotron section_wrap" style="margin-left: 61.667px; margin-right: 61.667px; padding-left:30px; padding-right:30px;">
                <div class="bs-example">
                <div class="accordion" id="myaccordion">
                    <div class="card">
                        <div class="card-header" id="localdelivery">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link button_faq" data-toggle="collapse" data-target="#collapseOne">Do you have local delivery service?</button>									
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="localdelivery" data-parent="#myaccordion">
                            <div class="card-body">
                                <p><b>Yes we do.</b> We provide 1 hour express delivery guarantee, from the moment we confirm your order until we arrive at your doorstep.</p>
                                <p>For orders <b>below</b> $100, we charge $10 per delivery trip. For orders of $100 or more, delivery is free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="refunds">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed button_faq" data-toggle="collapse" data-target="#collapseTwo">Do you do refunds/exchanges for orders?</button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="refunds" data-parent="#myaccordion">
                            <div class="card-body">
                                <p>Unfortunately, we <b>cannot offer refunds</b> once the order is placed. However, if the product is unsatisfactory, we <b>can offer exchanges</b> on a <b>case-by-case basis</b>.</p>
                                <p>Please <a href="EmbeddedMaps.php" target="_blank">contact us</a> for exchange requests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="sogood">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed button_faq" data-toggle="collapse" data-target="#collapseThree">Why are your cakes just so good?</button>                     
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="sogood" data-parent="#myaccordion">
                            <div class="card-body">
                                <p> They are made with a special ingredient. <a href="https://en.wikipedia.org/wiki/Imagination" target="_blank">Click here to learn more.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <br>
        <br>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>
