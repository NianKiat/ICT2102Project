<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include "header.php";
        include "navbar.php";
        ?>
        <script defer src="js/catalogue.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>

    <main>
        <header id="catalogue">
            <title>Catalogue</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <div class="row menu frame_over_image">
                <div class="w-100"></div>
                <div class="col">
                    <a href="#cakes" onclick="refreshitems('Cake')">Cakes</a>
                </div>
                <div class="col">
                    <a href="#cakes" onclick="refreshitems('Wedding Cake')">Wedding</a>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <a href="#cakes" onclick="refreshitems('Ice-cream Cake')">Ice-cream</a>
                </div>
                <div class="col">
                    <a href="#cakes" onclick="refreshitems('All')">All Cakes</a>
                </div>
            </div>
        </header>
        <section id="cakes">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading" id="jumbo_header"></h1>
                    <div class="container" id="container_placeholder">

                    </div>
                </div>
            </section>

        </section>
    </main>
    <?php
    include "footer.php";
    ?>
</html>