<html>
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Store Information</title>
        <noscript>
            <style>
                #toggle {display:none;}
                /*#map_canvas {display:none;}*/
                .gmap_canvas {width:540px; height:490px;}
            </style>
        </noscript>
        <script> <!-- refreshes the maps when resized to support responsiveness -->
            $(document).on("resize", function(){
            $("#gmap_canvas").hide().show();
        </script>
        <script>
            // this function is entangled to toggleme(). idea is that is the width is less than breakpoint...
            // ...we use this to clear the leftover image as a result of toggleme().
            function check_width_and_clear_img() {
                width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                //alert(width);
                var image = document.getElementById("myDIV");
                var map = document.getElementById("map-div");
                var button = document.getElementById("toggle");
                if (width < 992) {
                    map.style.display = "none";
                    image.style.display = "none";
                    button.style.display = "none";                    
                }
                else {
                    button.style.display = "initial";
                    if (image.style.display === "initial") {
                        // do nothing.
                    }
                    else {
                        map.style.display = "initial";
                    }
                }
            } 
        </script>
        <style>
            .mapouter{position:relative;text-align:center;height:100%;width:100%;}
            .mapouter_mobile{display:none;}
            .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}
            .gmap_canvas_mobile {display:none;}
            #gmap_canvas {width:540px; height:490px;}
            #gmap_canvas_mobile {display:none;}
            #map_col {padding-right:0px;}
            #locator_canvas {}
            #contact_us{padding-left: 15px; margin-top: 15px; margin-bottom:15px;}
            .center{text-align: center;}
            .grey_background{background-color: red;}
            span.bold {font-weight: bold; color: red;}
            p.bold {font-weight: bold;}
            #outer_wrapper{display: flex; justify-content: center; align-items: center;}
            #wrapper{display: inline-block; width: 56%;}
            .left{float: left;}
            .right{float: right;}
            span.spacing{display:flex; justify-content: center; width:100%;}
            span.mobile{display:none;}
            span.mobile_spacing {display: none;}
            #mobile-only-break {display:none;}
            .caps {
                font-family: 'Alegreya Sans SC', sans-serif;
            }
            #contact_us {margin-top:0px;}
            #info-block-id {padding-top:15px; background-color:#F6F6EB; height:100%;}
            /*.right{display: block; overflow: hidden; background-color: green;}*/
            #shop-image-div {
                display:none;
            }
            #myDIV {
                width:540px; 
                height:490px;
                text-align: center;
                background-color: lightblue;
                background-image: url("../images/cake-shop.jpg");
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
                display:none;
            }
            #picmobile {
                width:540px; 
                height:490px;
                position: relative;
                margin: 0 auto;
                background-color: lightblue;
                background-image: url("../images/cake-shop.jpg");
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
                display:none;
            }
            .mobile-only {
                display:none;
            }
            #mobile-only-div {
                display:none;
            }
            /*.center_space{display:block; overflow:auto; position:relative; background-color:blue;}*/
            @media only screen and (max-width: 1200px) {
                span.right {
                    display: none;
                }
                span.spacing {
                    display: none;
                }
                span.left {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                span.mobile {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                span.mobile_spacing {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                
                #gmap_canvas {
                    width:540px; height:562px;
                }
                
                #myDIV {
                    margin-top:2.25rem;
                }
                
                /*span.mobile {
                    display: initial;
                }*/
            }
            
            @media only screen and (max-width: 991px) {
                .mapouter {
                    display: none;
                }
                
                .mapouter_mobile {
                    display: initial; 
                    position: relative;
                    text-align: center;
                    height: 100%;
                    width: 100%;
                }
                .gmap_canvas_mobile {
                    display: initial;
                    overflow: hidden;
                    background: none!important;
                    height: 632px;
                    width: 632px;
                }
                #gmap_canvas_mobile {
                    display: initial;
                    width: 632px;
                    height: 632px;
                    padding-right:14px;
                }
                #mobile-only-break {
                    display:initial;
                }
                span.left{display: inline-block; float: left; width:auto;}
                span.right{display: inline-block; float: right;}
                span.spacing{display:flex; justify-content: center; width:100%;}
                span.mobile {
                    display: none;
                }
                span.mobile_spacing {
                    display: none;
                }
                #picmobile {
                    display: initial;
                    width:632px; 
                    height:490px;
                }
                .mobile-only {
                    display:initial;
                }
                #mobile-only-div {
                    display:initial;
                }
                #toggle_alt_text {
                    display:none;
                }
            }
            @media only screen and (max-width: 767px) {
                .gmap_canvas_mobile {
                    height: 400px;
                    width: 400px;
                }
                #gmap_canvas_mobile {
                    width: 400px;
                    height: 400px;
                }
                #picmobile {
                    width:400px; 
                    height:400px;
                }
            }
            
            @media only screen and (max-width: 550px) {
                span.right {
                    display: none;
                }
                span.spacing {
                    display: none;
                }
                span.left {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                span.mobile {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                span.mobile_spacing {
                    display: flex;
                    justify-content: center;
                    width: 100%;
                }
                
                #gmap_canvas {
                    width:540px; height:537px;
                }
                
                /*span.mobile {
                    display: initial;
                }*/
            }
            
            @media (max-width:768px) and (min-width:767px) {
                .gmap_canvas_mobile {
                    height: 400px;
                    width: 400px;
                }
                #gmap_canvas_mobile {
                    width: 400px;
                    height: 400px;
                }
                #picmobile {
                    width:400px; 
                    height:400px;
                }
            }​
        </style>
    </head>
    
    <body onresize="check_width_and_clear_img()">
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
            <li class="nav-item">
                <a class="nav-link" href="catalogue.php">Catalogue</a>
            </li> 

            <li class="nav-item active">
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
        <br>
        <main class="container"> 
            <section id ="store_info">
                <div class="container">
                    <div class="row">
                        <div id="contact_us" class="col-lg-6">
                            <div class="info-block" id="info-block-id">
                                <h2 class="center caps" style="color:red;"> Contact Us </h2>
                                <br>
                                <div id="outer_wrapper">
<!-- accessibility main -->         <div id="wrapper" role="main">
                                        <span class="left bold">Order Hotline:</span> 
                                        <span class="right bold"> +65 6592 2589</span>
                                        <span class="spacing"> &nbsp; </span>
                                        <span class="mobile bold"> +65 6592 2589</span>
                                        <span class="mobile_spacing"> &nbsp; </span>
                                        <!--<span class="center_space"> &nbsp; </span>-->

                                        <span class="left"> General Enquiries: </span> 
                                        <span class="right"> +65 6550 1674 </span>
                                        <span class="spacing"> &nbsp; </span>
                                        <span class="mobile"> +65 6550 1674 </span>
                                        <span class="mobile_spacing"> &nbsp; </span>
                                        <!--<span class="center_space"> &nbsp; </span>-->

                                        <span class="left"> Business Email: </span> 
                                        <span class="right"> <a href="mailto:contact@floured.co">contact@floured.co</a> </span>
                                        <span class="mobile"> <a href="mailto:contact@floured.co">contact@floured.co</a> </span>
                                        <!--<span class="center_space"> &nbsp; </span>-->
                                    </div>
                                </div>
                                <hr style="width:66.7%">
                                <h2 class="center caps" style="color:orange;"> Hours & Address </h2>
                                <p class="center" style="color:green;">
                                    Daily 7am ~ 11pm 
                                </p>
                                <p id="location" class="center bold">
                                    Level 1, Near the Student Clubroom
                                </p>
                                <p class="center">
                                    Singapore Institute of Technology @ NYP
                                </p>
                                <p class="center">
                                    172 Ang Mo Kio Avenue 8, SG 567739
                                </p>
                                <div style="text-align: center; margin-bottom:16px;">
                                    <button onclick="toggleme()" id = "toggle" type = "button" style="font-family: 'Alegreya Sans SC', sans-serif;">view maps/image</button>
                                    <br id="togglespace" style="display:none;">
                                    <p id="toggle_alt_text" style="text-align:center; padding-bottom: 5px;"> Click <a href="https://drive.google.com/file/d/10AdimEhoBEtcjmZ-fNrRTDu0qdEykMr_/view?usp=sharing" target="_blank">here</a> to view our shopfront. </p>
                                </div>
                            </div>
                        </div>
                        <div id="map_col" class="col-lg-6 d-flex justify-content-center">
                            <div id="map-div" class="mapouter">
                                <!--<p id="nomaps_text" style="padding-top:5rem;"> Please enable Javascript to view our Maps.</p>-->
                                <div id="map_canvas" class="gmap_canvas">
                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=sit%20nyp&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                            <div id="map-div" class="mapouter_mobile">
                                <div class="gmap_canvas_mobile">
                                    <iframe id="gmap_canvas_mobile" src="https://maps.google.com/maps?q=sit%20nyp&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                                <br>
                            </div>
                            <div id="myDIV">
                                <!-- leave this empty! -->
                            </div>
                        </div>
                    </div>
                    <br id="picmobile_break mobile-only">
                    <div class="row mobile-only">
                        <div class="container" style="text-align:center;">
                            <h1 class="jumbotron-heading section_heading">our shopfront</h1>
                            <hr class="section_break">
                        </div>
                    </div>
                    <div class="row">
                        <div id="picmobile">
                            <!-- leave this empty! -->
                        </div>
                    </div>
                </div>
             </section>
            <br>
        </main>
        <br id="mobile-only-break">
        <?php    
        include "footer.php";    
        ?>
        <script>
            window.onload = check_width_onload(); // if the page loads onto the breakpoint, we want to remove the button as per design.
            window.onload = remove_noJS_element();
            function check_width_onload() {
                var myWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var toggle_button = document.getElementById("toggle");
                if (myWidth < 992) {
                    toggle_button.style.display = "none";                    
                }
                else {}
            }
            function remove_noJS_element() {
                var toggle_text = document.getElementById("toggle_alt_text");
                toggle_text.style.display = "none";
                var nomaps = document.getElementById("nomaps_text");
                nomaps_text.style.display = "none";
            }
            
            var firstloop = true;
            var onmaps = true; // when the right column wraps under the left column, it switches back to maps. hence we need this to track.
            var width;
            
            function toggleme() {
                width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                var image = document.getElementById("myDIV");
                var map = document.getElementById("map-div");
                if (width >= 992) {
                    if (firstloop === true) {
                        image.style.display = "none";
                        map.style.display = "initial";
                        onmaps = true;
                        firstloop = false;
                    }
                    if (image.style.display === "none") {
                      image.style.display = "initial";
                      map.style.display = "none";
                      onmaps = false;
                    } else {
                      image.style.display = "none";
                      map.style.display = "initial";
                      onmaps = true;
                    }
                }
                else {
                    map.style.display = "false";
                }
            };
        </script>
    </body>
</html>