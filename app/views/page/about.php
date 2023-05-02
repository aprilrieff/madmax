<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php require_once(APPROOT . "/views/inc/navbar.php") ?>

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
                Mad Max Brewery is a local gem that offers a unique experience for beer enthusiasts and pet lovers alike. We are a popular spot where you can bring your furry friend along to join in on the fun. With a wide variety of craft beers on tap, ranging from traditional favorites to experimental blends, there's something for everyone to enjoy. The outdoor patio area is the perfect spot to relax and enjoy your beverage, while your pup lounges nearby. Mad Max Brewery often hosts events, including live music and trivia nights, creating a lively atmosphere. Mad Max Brewery is a must-visit destination for both locals and visitors alike.                    <p>
                <!-- button -->
<!--            <div class="page-scroll">-->
<!--                <a href="#team" class="btn btn-secondary">Contact Us</a>-->
<!--            </div>-->
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

<?php require_once(APPROOT . "/views/inc/footer.php") ?>