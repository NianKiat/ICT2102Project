<html>
    <head>
        <?php
        include 'header.php';
        ?>
        <title>Store Information</title>
        <script>
            $(document).on("resize", function(){
            $("#gmap_canvas").hide().show();
            // or do this
            // $("#myIframe").css("display","none").css("display","block");
            });
            function changeCanvasHeight() {
               /* var w = window.outerWidth;
                var h = document.getElementById("info-block-id").style.height;
                if (w <= 1200 && w >= 991) {
                    document.getElementById("gmap_canvas").style.height = 20 + "px";
                }*/
            }
        </script>
        <style>
            .mapouter{position:relative;text-align:center;height:100%;width:100%;}
            .mapouter_mobile{display:none;}
            .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}
            .gmap_canvas_mobile {display:none;}
            #gmap_canvas {width:540px; height:467px;}
            #gmap_canvas_mobile {display:none;}
            #map_col {padding-left: 15px;}
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
                    width:540px; height:537px;
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
                    height: 400px;
                    width: 400px;
                }
                #gmap_canvas_mobile {
                    display: initial;
                    width: 400px;
                    height: 400px;
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
        </style>
    </head>
    
    <body onresize="changeCanvasHeight()">
        <?php 
            include "navbar.php"; 
        ?>
        <br>
        <main class="container"> 
            <section id ="store_info">
                <div class="container">
                    <div class="row">
                        <div id="contact_us" class="col-lg-6">
                            <div class="info-block" id="info-block-id">
                                <h2 class="center caps"> Contact Us </h2>
                                <br>
                                <div id="outer_wrapper">
                                    <div id="wrapper">
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
                                <h2 class="center caps"> Hours & Address </h2>
                                <br>
                                <p class="center">
                                    Daily 7am ~ 11pm 
                                </p>
                                <p class="center bold">
                                    Level 1, Near the Student Clubroom
                                </p>
                                <p class="center">
                                    Singapore Institute of Technology @ NYP
                                </p>
                                <p class="center">
                                    172 Ang Mo Kio Avenue 8, Singapore 567739
                                </p>
                            </div>
                        </div>
                        <div id="map_col" class="col-lg-6 d-flex justify-content-center">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=sit%20nyp&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                            <div class="mapouter_mobile">
                                <div class="gmap_canvas_mobile">
                                    <iframe id="gmap_canvas_mobile" src="https://maps.google.com/maps?q=sit%20nyp&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        </main>
        <br id="mobile-only-break">
        <?php    
        include "footer.php";    
        ?>
    </body>
</html>