<?php
include "sessiontest.php";
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'navbar.php';
        include "header.php";
        ?>
        <script defer src="js/catalogue.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <style>
            .capsfont {
                font-family: 'Alegreya Sans SC', sans-serif;
            }
        </style>
    </head>
    <body>

    <main>
        <header id="catalogue">
            <title>Catalogue</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <div class="row menu frame_over_image">
                <div class="w-100"></div>
                <div class="col capsfont">
                    <a href="#cakes" onclick="refreshitems('Cake')">Cakes</a>
                </div>
                <div class="col capsfont">
                    <a href="#cakes" onclick="refreshitems('Wedding Cake')">Wedding</a>
                </div>
                <div class="w-100"></div>
                <div class="col capsfont">
                    <a href="#cakes" onclick="refreshitems('Ice-cream Cake')">Ice-cream</a>
                </div>
                <div class="col capsfont">
                    <a href="#cakes" onclick="refreshitems('All')">All Cakes</a>
                </div>
            </div>
        </header>
        <section id="cakes">
            <section class="jumbotron text-center" style="background-color:white;">
                <div class="container">
                    <h1 class="jumbotron-heading section_heading" id="jumbo_header"></h1>
                    <div class="container" id="container_placeholder">
                    </div>
                </div>
            </section>

        </section>
    </main>
    </body>
    <?php
    include "footer.php";
    ?>
</html>