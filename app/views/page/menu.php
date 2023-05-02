<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php require_once(APPROOT . "/views/inc/navbar.php") ?>

    <!-- Section Page -->
    <section id="page" class="pages">
        <!-- jumbotron -->
        <div class="jumbotron" data-center="background-position: 50% 0px;"
             data-top-bottom="background-position: 50% -60px;"
             style="background-image: url('<?php echo URLROOT ?>/img/menu_jumbotron.png')">
            <div class="container">
                <!-- /col-md-6 -->
                <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">
                    <!-- Heading -->
                    <h1>Menu</h1>
                    <!-- Breadcrumb -->
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Menu</li>
                    </ul>
                </div>
                <!-- /jumbo-heading -->
            </div>
            <!-- /container -->
        </div>
        <!-- /jumbotron -->
        <!-- Page -->
        <div id="page-container" class="menu-page no-bg-small container">
            <?php flash("item_message"); ?>
            <div class="col-md-12">
                <?php if (!empty($_SESSION["userAdmin"]) && $_SESSION["userAdmin"] == 1): ?>
                    <a class="btn btn-success" href="<?php echo URLROOT; ?>/menu/add">
                        <i class="fa-solid fa-pencil"></i> Add Item
                    </a>
                <?php endif ?>
                <!-- nav pills -->
                <div class="nav-center-responsive"
                     style="display: flex !important; justify-content: space-evenly !important;">
                    <ul class="nav nav-pills " id="prices-nav">
                        <li><a href="#tab_a" data-toggle="pill">Appetizers</a></li>
                        <li><a href="#tab_b" data-toggle="pill">Entrees</a></li>
                        <li><a href="#tab_c" data-toggle="pill">Drinks</a></li>
                        <li><a href="#tab_d" data-toggle="pill">Desserts</a></li>
                    </ul>
                </div>
                <!-- Tab content -->
                <div class="tab-content col-md-12 res-margin ">
                    <div class="tab-pane fade in active" id="tab_a">
                        <div class="row">
                            <!-- Menu: starters -->
                            <h3 class="text-center" style="margin-top: 4rem;">Appetizers</h3>
                            <!-- column -->

                            <?php
                            foreach ($data["appetizers"] as $menu_item):
                                $id = $menu_item->item_id;
                                $name = $menu_item->item_name;
                                $category = $menu_item->item_category;
                                $price = $menu_item->item_price;
                                $description = $menu_item->item_description;
                                ?>

                                <div class="col-md-6">

                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item card">
                                                <div class="menu-item-name">
                                                    <?php echo $name ?>
                                                </div>
                                                <div class="menu-item-price">
                                                    <?php echo $price ?>
                                                </div>
                                                <div class="menu-item-description">
                                                    <?php echo $description ?>
                                                </div>
                                                <div>
                                                    <?php if (!empty($_SESSION["userAdmin"]) && $_SESSION["userAdmin"] == 1): ?>
                                                        <a href="<?php echo URLROOT ?>/menu/edit/<?php echo $id ?>"
                                                           class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo URLROOT ?>/menu/delete/<?php echo $id ?>"
                                                           class="btn btn-danger">Delete</a>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                            <?php endforeach; ?>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane  -->
                    </div>
                    <!-- tab content -->
                </div>

                <div class="tab-content col-md-12 res-margin">
                    <div class="tab-pane fade in active" id="tab_b">
                        <div class="row">
                            <!-- Menu: starters -->
                            <h3 class="text-center" style="margin-top: 4rem;">Entrees</h3>
                            <!-- column -->

                            <?php
                            foreach ($data["entrees"] as $menu_item):
                                $id = $menu_item->item_id;
                                $name = $menu_item->item_name;
                                $category = $menu_item->item_category;
                                $price = $menu_item->item_price;
                                $description = $menu_item->item_description;
                                ?>

                                <div class="col-md-6">

                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item card">
                                                <div class="menu-item-name">
                                                    <?php echo $name ?>
                                                </div>
                                                <div class="menu-item-price">
                                                    <?php echo $price ?>
                                                </div>
                                                <div class="menu-item-description">
                                                    <?php echo $description ?>
                                                </div>
                                                <div>
                                                    <?php if (!empty($_SESSION["userAdmin"]) && $_SESSION["userAdmin"] == 1): ?>
                                                        <a href="<?php echo URLROOT ?>/menu/edit/<?php echo $id ?>"
                                                           class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo URLROOT ?>/menu/delete/<?php echo $id ?>"
                                                           class="btn btn-danger">Delete</a>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                            <?php endforeach; ?>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane  -->
                    </div>
                    <!-- tab content -->
                </div>

                <div class="tab-content col-md-12 res-margin">
                    <div class="tab-pane fade in active" id="tab_c">
                        <div class="row">
                            <!-- Menu: starters -->
                            <h3 class="text-center" style="margin-top: 4rem;">Drinks</h3>
                            <!-- column -->

                            <?php
                            foreach ($data["drinks"] as $menu_item):
                                $id = $menu_item->item_id;
                                $name = $menu_item->item_name;
                                $category = $menu_item->item_category;
                                $price = $menu_item->item_price;
                                $description = $menu_item->item_description;
                                ?>
                                <div class="col-md-6">

                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item card">
                                                <div class="menu-item-name">
                                                    <?php echo $name ?>
                                                </div>
                                                <div class="menu-item-price">
                                                    <?php echo $price ?>
                                                </div>
                                                <div class="menu-item-description">
                                                    <?php echo $description ?>
                                                </div>
                                                <div>
                                                    <?php if (!empty($_SESSION["userAdmin"]) && $_SESSION["userAdmin"] == 1): ?>
                                                        <a href="<?php echo URLROOT ?>/menu/edit/<?php echo $id ?>"
                                                           class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo URLROOT ?>/menu/delete/<?php echo $id ?>"
                                                           class="btn btn-danger">Delete</a>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                            <?php endforeach; ?>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane  -->
                    </div>
                    <!-- tab content -->
                </div>

                <div class="tab-content col-md-12 res-margin">
                    <div class="tab-pane fade in active" id="tab_d">
                        <div class="row">
                            <!-- Menu: starters -->
                            <h3 class="text-center" style="margin-top: 4rem;">Desserts</h3>
                            <!-- column -->

                            <?php
                            foreach ($data["dessert"] as $menu_item):
                                $id = $menu_item->item_id;
                                $name = $menu_item->item_name;
                                $category = $menu_item->item_category;
                                $price = $menu_item->item_price;
                                $description = $menu_item->item_description;
                                ?>
                                <div class="col-md-6">

                                    <div class="menu-body">
                                        <div class="menu-section">
                                            <!-- Item starts -->
                                            <div class="menu-item card">
                                                <div class="menu-item-name">
                                                    <?php echo $name ?>
                                                </div>
                                                <div class="menu-item-price">
                                                    <?php echo $price ?>
                                                </div>
                                                <div class="menu-item-description">
                                                    <?php echo $description ?>
                                                </div>
                                                <div>
                                                    <?php if (!empty($_SESSION["userAdmin"]) && $_SESSION["userAdmin"] == 1): ?>
                                                        <a href="<?php echo URLROOT ?>/menu/edit/<?php echo $id ?>"
                                                           class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo URLROOT ?>/menu/delete/<?php echo $id ?>"
                                                           class="btn btn-danger">Delete</a>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <!-- Item ends -->
                                        </div>
                                        <!--/ menu section -->
                                    </div>
                                    <!-- / menu body -->
                                </div>
                            <?php endforeach; ?>
                            <!-- /.row -->
                        </div>
                        <!-- /tab-pane  -->
                    </div>
                    <!-- tab content -->
                </div>


            </div>
        </div>
    </section>
    <!-- /Section ends -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>