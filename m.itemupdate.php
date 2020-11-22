<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
        include 'header.php';
        include 'm.navbar.php';
        ?>

        <script defer src="js/itemupdate.js" type="text/javascript"></script>
        <title>Floured - Manage Items</title>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Manage Items</h1>
                <p class="lead col-md">Update or Remove items.</p>
                <div class="card border-dark mb-3">
                    <div class="card-header">Catalogue List
                        <form action='processmulti_item.php' method="post">
                            <div id="hidden_form_container" style="display:none;">
                                <input type='text' class='form-control' id='selected' name='idarray'>
                            </div>
                            <a class='btn btn-danger float-right' onclick="toggle('Delete')" style='margin-left:10px;'>Delete</a>
                            <a class='btn btn-dark float-right' onclick="toggle('Price')" style='margin-left:10px;'>Set Price</a>
                            <a class='btn btn-dark float-right' onclick="toggle('Discount')">Set Discount</a>
                        </form>
                    </div>
                    <div class="card-body text-primary">
                        <main role="main" class="col-md-9 ml-sm-auto col-lg-auto px-md-auto">

                            <div class="table-responsive">
                                <table id="item_table" class="table table-striped table-sm">
                                    <thead>
                                        <tr id="item_header">
                                            <th id="date">Sort by: Date(asc)</th>
                                            <th id="name">Name</th>
                                            <th id="price">Price</th>
                                            <th id="discount">Discount</th>
                                            <th id="selectall">
                                                <label><input type="checkbox" id="select_all" value="all">Select all</label>
                                            </th>
                                            <th id="edit">edit</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <?php
    include 'footer.php';
    ?>
</html>
