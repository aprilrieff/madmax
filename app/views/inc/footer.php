<?php /** @var TYPE_NAME $data */ ?>
<footer class="pattern text-light footer">
    <div class="container">
        <div class="col-lg-4">
            <h6>About us</h6>
            <p>
                Mad Max is a popular local brewery known for its delicious craft beers and unique flavor combinations,
                offering a fun and welcoming atmosphere for beer enthusiasts to enjoy their brews.
            </p>
        </div>
        <!-- /col-lg-4-->
        <div class="col-lg-4 text-center">
            <!-- Small Logo -->
            <div class="brand small">
                <img src="<?php echo URLROOT; ?>/img/logo.png" class="img-responsive center-block" alt="Mad Max Logo">
            </div>
            <!-- /brand -->
            <p style="margin-top: 2rem;"><?php echo ADDRESS?></p>
            <p><?php echo PHONE?></p>
        </div>
        <!-- /col-lg-4-->
        <div class="col-lg-4 res-margin">
            <h6 class="res-margin ">Join our Newsletter</h6>
            <p>We will send you news once a week</p>
            <!-- Form -->
            <div id="mc_embed_signup">
                <form action="<?php echo URLROOT; ?>/user/subscribe" method="post">
                    <input type="hidden" name="redirect"
                           value="<?php echo (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <div class="input-group">
                                <input class="form-control input-lg required email" type="text" value="" name="email"
                                       placeholder="Your email here" id="mce-EMAIL">
                                <span class="input-group-btn">
                                 <button class="btn btn-default" type="submit" value="Subscribe" name="subscribe"
                                         id="mc-embedded-subscribe">
                                 Subscribe
                                 </button>
                                 </span>
                            </div>
                        </div>
                        <!-- /mc-fiel-group -->
                    </div>
                    <!-- /mc_embed_signup_scroll -->
                </form>
                <!-- /form ends -->
                <!--            </div>-->
                <!-- /mc-field-group -->
                <!--        </div>-->
                <!-- /mc_embed_signup_scroll -->
                <?php flash("subscribe_message"); ?>
            </div>
            <!-- /mc_embed_signup -->

        </div>
        <!--/col-lg-4  -->
        <!-- Credits-->
        <div class="col-md-12 text-center">
            Copyright © 2023 - Designed by <a href="https://www.linkedin.com/in/april-rieff-46b75324a/">April Rieff</a>
            <!-- Go To Top Link -->
            <div class="page-scroll">
                <a href="#page-top" class="back-to-top"><i class="fas fa-angle-double-up"></i></a>
            </div>
        </div>
        <!-- /credits -->
    </div>
    <!-- /.container -->
</footer>
</div>
<script src="<?php echo URLROOT; ?>/js/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/main.js"></script>
<script src="<?php echo URLROOT; ?>/js/plugins.js"></script>
<script src="<?php echo URLROOT; ?>/js/mc-validate.js"></script>



<?php if($data["title"] == "Contact") {?>
<script src="<?php echo URLROOT; ?>/js/reservation.js"></script>
<script src="<?php echo URLROOT; ?>/js/leaflet.js"></script>
<?php } ?>

<!--<script src="--><?php //echo URLROOT; ?><!--/js/map.js"></script>-->
<script src="<?php echo URLROOT; ?>/js/prefixfree.js"></script>
<script src="<?php echo URLROOT; ?>/js/respond.js"></script>
</body>
</html>