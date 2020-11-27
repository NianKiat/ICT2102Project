<?php
include 'sessiontest.php';
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
        /*include 'carousel.php';*/
        ?>
        <div id="banner_image" class="jumbotron jumbotron-fluid">
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
        <section class="jumbotron text-center section_wrap">
            <div class="container">
                <h1 class="jumbotron-heading section_heading">what sets us apart</h1>
                <hr class="section_break">
            </div>
            <div class="container">
                <div class="row" style="padding-top:1rem;">
                    <div class="col-12 col-md-6 col-lg-3"> <img id="acclaimed" class="card-img-top" src="../images/acclaimed_large.png" alt="acclaimed"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="affordable" class="card-img-top" src="../images/affordable_large.png" alt="affordable"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="more" class="card-img-top" src="../images/more1_large.png" alt="more choices"></div>
                    <div class="col-12 col-md-6 col-lg-3"> <img id="time" class="card-img-top" src="../images/time1_large.png" alt="1 hour express delivery"></div>
                </div>
            </div>
        </section>
        <section class="jumbotron text-center section_wrap">
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                            <a href="catalogue.php" class="btn btn-info button_custom" role="button">shop all cakes</a>
                            <!--<button type="button" class="btn btn-info btn-lg button_custom">shop all cakes</button>-->
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <br>
        <section class="jumbotron text-center section_wrap">
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                            <a href="EmbeddedMaps.php" class="btn btn-info button_custom" role="button">store location</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <br>
        <section class="jumbotron text-center section_wrap">
            <div class="container">
                <h1 class="jumbotron-heading section_heading">frequently asked questions</h1>
                <hr class="section_break" style="width:40%;">
            </div>
        </section>
        <section class="jumbotron section_wrap" style="margin-left: 61.667px; margin-right: 61.667px; padding-left:30px; padding-right:30px;">
            <div class="bs-example">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link button_faq" data-toggle="collapse" data-target="#collapseOne">Do you have local delivery service?</button>									
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Yes we do. We provide 1 hour express delivery guarantee, from the moment we confirm your order until we arrive at your doorstep.</p>
                            <p>For orders below $100, we charge $10 per delivery trip per slice of cake. For orders of $100 or more, delivery is free.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed button_faq" data-toggle="collapse" data-target="#collapseTwo">Do you do refunds/exchanges for orders?</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Unfortunately, we cannot offer refunds once the order is placed. However, if the product is unsatisfactory, we can offer exchanges on a case-by-case basis.</p>
                            <p>Please <a href="#" target="_blank">contact us</a> for exchange requests.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed button_faq" data-toggle="collapse" data-target="#collapseThree">Why are your cakes just so good?</button>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p> They are made with a special ingredient. <a href="https://en.wikipedia.org/wiki/Imagination" target="_blank">Click here to learn more.</a></p>
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
