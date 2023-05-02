<?php /** @var TYPE_NAME $data */ ?>
<nav class="navbar navbar-custom navbar-fixed-top" id="navbar-custom">
    <div class="container">
        <!-- Logo and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Logo -->
            <div class="navbar-brand page-scroll">
                <a href="<?php echo URLROOT ?>"><img src="<?php echo URLROOT; ?>/img/logo.png" class="img-responsive"
                                                     alt="Mad Max Logo"></a>
            </div>
        </div>
        <!-- /.navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand">
            <ul class="nav navbar-nav page-scroll navbar-right">
                <li class="<?php echo($data["title"] == "Home" ? "active" : "text-medium") ?>"><a
                            href="<?php echo URLROOT ?>">Home</a></li>
                <li class="<?php echo($data["title"] == "About" ? "active" : "text-medium") ?>"><a
                            href="<?php echo URLROOT ?>/page/about">About</a></li>

<!--                Menu -->
                <li class="<?php echo($data["title"] == "All Items" ? "active" : "text-medium") ?>">
                    <a href="<?php echo URLROOT ?>/page/menu">Menu</a>
                </li>

                <!--                Contact-->
                <li class="<?php echo($data["title"] == "Contact" ? "active" : "text-medium") ?>"><a
                            href="<?php echo URLROOT ?>/page/contact">Contact</a></li>

                <!--User-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">User<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if (!isLoggedIn()) { ?>
                            <li class="<?php echo($data["title"] == "Register" ? "active" : "text-medium") ?>"><a
                                        href="<?php echo URLROOT ?>/user/register">Register</a></li>
                            <li class="<?php echo($data["title"] == "Login" ? "active" : "text-medium") ?>"><a
                                        href="<?php echo URLROOT ?>/user/login">Login</a></li>
                        <?php } else { ?>
                            <li class="<?php echo($data["title"] == "Logout" ? "active" : "text-medium") ?>"><a
                                        href="<?php echo URLROOT ?>/user/logout">Logout</a></li>
                        <?php } ?>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /container -->
</nav>

<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
