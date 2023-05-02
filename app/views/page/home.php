<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php require_once(APPROOT . "/views/inc/navbar.php") ?>

    <div class="slider-container">
        <?php flash("register-success"); ?>

        <!-- Controls -->
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagination"></ul>
        <!--Slider -->
        <div class="slider">
            <!-- Slide 0 -->
            <div class="slide slide-0 active">
                <div class="slide__bg" style="background-image:url('<?php echo URLROOT ?>/img/slide0.png')">
                </div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax ">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                    </svg>
                    <!-- slide header -->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">Welcome <br> to Mad Max</h1>
                        <div class="hidden-sm hidden-xs">
                            <p class="lead">We are local brewery known for our craft beers and unique flavor
                                combinations, offering a fun and welcoming atmosphere for beer enthusiasts and their
                                pups to enjoy their brews.</p>
                            <div class="page-scroll">
                                <a href="<?php echo URLROOT ?>/page/about" class="btn btn-secondary">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="slide slide-1">
                <div class="slide__bg" style="background-image:url('<?php echo URLROOT ?>/img/slide1.png')"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                    </svg>
                    <!-- slide header -->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">What's On Tap</h1>
                        <div class="hidden-sm hidden-xs">
                            <p class="lead">View a list of our current brews on tap</p>
                            <div class="page-scroll">
                                <a href="<?php echo URLROOT ?>/page/menu" class="btn btn-secondary">Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /slider-->

    <!-- Section: about -->
    <section id="about">
        <div class="container">
            <!-- Section heading -->
            <div class="col-md-12">
                <div class="">
                    <h2>About us</h2>
                </div>
            </div>
            <!-- /Section-heading -->
            <div class="col-lg-6">
                <h3>Local Pet-Friendly Dive</h3>
                <p>
                    Mad Max Brewery is a local gem that offers a unique experience for beer enthusiasts and pet lovers
                    alike. We are a popular spot where you can bring your furry friend along to join in on the fun. With
                    a wide variety of craft beers on tap, ranging from traditional favorites to experimental blends,
                    there's something for everyone to enjoy. The outdoor patio area is the perfect spot to relax and
                    enjoy your beverage, while your pup lounges nearby. Mad Max Brewery often hosts events, including
                    live music and trivia nights, creating a lively atmosphere. Mad Max Brewery is a must-visit
                    destination for both locals and visitors alike.
                <p>
                    <!-- button -->
                <div class="page-scroll">
                    <a href="<?php echo URLROOT ?>/page/about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            <!-- /col-lg-6 -->
            <!-- Parallax object -->
            <div class="col-lg-6 res-margin">
                <div class="parallax-object col-md-12 hidden-sm hidden-xs hidden-md"
                     data-100-start="transform:scale(0.5);"
                     data-center="transform:scale(1);">
                    <!-- Image -->
                    <img src="<?php echo URLROOT; ?>/img/about1.png" alt="" class="img-responsive">
                </div>
                <!-- /parallax-object -->
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section Ends -->
    <!-- Section: icons -->
    <section id="icons" class="container-fluid bg-color2-secondary" >
        <div class="container text-center">
            <div class="col-md-12">
                <div class="carousel col-md-12">
                    <!-- Icon box 1 -->
                    <div class="icon-box">
                        <img src="img/icons/024-beer.png" class="img-icon img-responsive center-block "  alt="" >
                        <h5>Happy Hour</h5>
                        <p>
Come enjoy half price pints and appetizers from 4-6pm every afternoon! Oh, and free pup cups on the house!                      </p>
                    </div>
                    <!-- Icon box 2 -->
                    <div class="icon-box">
                        <img src="img/icons/002-ingredients.png" class="img-icon img-responsive center-block "  alt="" >
                        <h5>Local Ingredients</h5>
                        <p>
We work with local farmers and suppliers to deliver the freshest ingredients to your table.                        </p>
                    </div>
                    <!-- Icon box 3 -->
                    <div class="icon-box">
                        <img src="img/icons/067-burger.png" class="img-icon img-responsive center-block "  alt="" >
                        <h5>Delicious Bites</h5>
                        <p>
Check out our delicious menu! Stacked with mouthwatering burgers and entrees, there's something for everybody!                      </p>
                    </div>
                    <!-- Icon box 4 -->
                    <!-- Icon box 5 -->
                </div>
                <!-- /carousel -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section Ends -->
    <!-- Section: call to action -->
    <section id="call-to-action" class="fixedbg container-fluid" data-bottom-top="background-position: 0% 50%;"
             data-top-bottom="background-position: 0% 100%;">
        <div class="container">
            <!-- Section heading -->
            <div class="col-lg-6 col-md-8" data-center="opacity: 1" data-top="opacity: 0" data-anchor-target="#anchor1">
                <div class="well text-center">
                    <h3>
                        Never miss out on the fun! Book a reservation today!
                    </h3>
                    <!-- button -->
                    <div class="page-scroll" id="anchor1">
                        <a href="<?php echo URLROOT?>/page/contact" class="btn btn-lg btn-primary">Reserve A Table</a>
                    </div>
                </div>
                <!-- /well -->
            </div>
            <!-- /box-padding -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section Ends -->
    <section id="opening" data-bottom-top="background-position: 0% 50%;" data-top-bottom="background-position: 0% 100%;">
        <div class="container text-light">
            <div class="col-lg-5 col-lg-offset-7 text-center">
                <!-- Sign-->
                <div class="sign" style="background-color: #0b1c2e">
                    <h3 class="text-light">Our Hours:</h3>
                    <!-- Table-->
                    <table class="table opening">
                        <tbody>
                        <tr>
                            <td class="text-left">Monday - Thursday</td>
                            <td class="text-right"><?php echo WEEK_HOURS?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Friday - Sunday</td>
                            <td class="text-right"><?php echo WEEKEND_HOURS?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Holidays</td>
                            <td class="text-right"><?php echo HOLIDAY_HOURS?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /sign ends-->
            </div>
            <!-- / col-md-5 -->
        </div>
        <!-- / container -->
    </section>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>