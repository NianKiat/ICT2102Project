<?php
include 'sessiontest.php';
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'navbar.php';
        include 'header.php';
        ?>
        <title>Floured! Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script>
            function check_width() {
                width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                //alert(width);
                var button = document.getElementById("banner_button_right");
                if (width >= 768) {
                    button.style.marginTop = "0px";
                } else if (width < 768) {
                    button.style.marginTop = "1rem";
                    if (width === 767) {
                        button.style.width = "192px";
                    }
                } else {
                }
            }
        </script>
        <Style>
            .alert {
                position: relative;
                padding: .75rem 1.25rem;
                margin-bottom: 0rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }
        </style>
    </head>
    <?php
    if (isset($_SESSION['verified'])) {
        if ($_SESSION['verified'] == 0) {
            ?>
            <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                <strong style='text-align: center'>You're about to get caked!</strong> Please verify your e-mail! Verifying your e-mail allows for password recovery!            <a href="settings.php" class="alert-link">Resend Verification E-mail</a>
                <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
                    <span aria-hidden = "true">&times;
                    </span>
                </button>
            </div>
            <?php
        }
    }
    ?>

    <body onresize="check_width()">
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
                            <img class="card-img-top card-thumbnail-img" src="images/cakes/Quad_Stacked_Cake.jpg" alt="Stacked Cake">
                            <div class="card-body">
                                <a href="https://commons.wikimedia.org/wiki/File:Cake_Competition_(2).jpg">Image Source</a>
                                <p class="card-text">Who said only wedding cakes can be stacked up tall? This cake is meant for large parties and it tastes as great as it looks.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top card-thumbnail-img" src="images/cakes/red_cake.jpg" alt="Red Rose Cake">
                            <div class="card-body">
                                <a href="http://gebicakes.ru/">Image Source</a>
                                <p class="card-text">A red cake made up of red roses for your special someone on a very special day. The best memories is created by the best cake.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top card-thumbnail-img" src="images/cakes/blue_cake.jpg" alt="Blue Galaxy Cake">
                            <div class="card-body">
                                <a href="http://gebicakes.ru/">Image Source</a>
                                <p class="card-text">The blue galaxy cake, coated with a thin layer of edible coating. The beauty of this cake is like its design, out of this world.</p>
                                <div class="d-flex justify-content-between align-items-center">
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
