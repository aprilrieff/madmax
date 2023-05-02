<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php require_once(APPROOT . "/views/inc/navbar.php") ?>

<section id="page" class="pages no-padding-bottom">
    <!-- jumbotron -->
    <div class="jumbotron dark-overlay" data-center="background-position: 50% 0px;"
         data-top-bottom="background-position: 50% -60px;" style="background-image: url('<?php echo URLROOT?>/img/barley_jumbotron.png')">
        <div class="container">
            <!-- /col-md-6 -->
            <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">
                <!-- Heading -->
                <h1>Contact</h1>
                <!-- Breadcrumb -->
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>
    <!-- /jumbotron -->
    <!-- Page -->
    <div class="container-fluid">
        <!-- container -->
        <div class="container">
            <!--  Box -->
            <div class="row">
                <div class="col-lg-4 box-padding">
                    <h5 class="text-center">Visit Us</h5>
                    <p class="text-center">
                        If you have any questions or comments feel free to reach out to us at Mad Max Brewery. Come
                        visit us for a cold beer and some delicious food! Cheers!
                    </p>
                </div>
                <div class="col-lg-4 text-center box-padding divider-border">
                    <h5>Contact Info</h5>
                    <!-- Bottom Info -->
                    <ul class="list-unstyled contact-info">
                        <li>(319) 431-0004</li>
                        <li>Email: <a href="mailto:your@email.com">info@madmax.com</a></li>
                        <li>1120 Depot Lane SE, Cedar Rapids, IA 52401</li>
                    </ul>
                    <!--Social icons -->
<!--                    <div class="social-media">-->
<!--                        <a href="#" title=""><i class="fab fa-twitter"></i></a>-->
<!--                        <a href="#" title=""><i class="fab fa-facebook"></i></a>-->
<!--                        <a href="#" title=""><i class="fab fa-google-plus"></i></a>-->
<!--                        <a href="#" title=""><i class="fab fa-instagram"></i></a>-->
<!--                    </div>-->
                </div>
                <div class="box-padding col-lg-4">
                    <h5 class="text-center">Opening Hours:</h5>
                    <!-- Table-->

                    <table class="table opening">
                        <tbody>
                        <tr>
                            <td class="text-left">Mon - Thurs</td>
                            <td class="text-right">11am to 10pm</td>
                        </tr>
                        <tr>
                            <td class="text-left">Fri - Sat</td>
                            <td class="text-right">11am to 11pm</td>
                        </tr>
                        <tr>
                            <td class="text-left">Sunday</td>
                            <td class="text-right">10am to 10pm</td>
                        </tr>
                        <tr>
                            <td class="text-left">Holidays</td>
                            <td class="text-right">Closed</td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- /table -->
                </div>
                <!-- /box-padding -->
            </div>
            <!-- /text-center -->
        </div>
        <!-- /container -->
        <div class="container-fluid contact-bg dark-overlay small-section">
            <h4 class="text-center text-light">Make a Reservation</h4>
            <!-- Contact Form -->
            <div id="contact_form" class="margin1 container">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Name" class="form-control input-field"
                                   required="">
                        </div>
                        <!-- /col-md-12 -->
                        <div class="col-md-12">
                            <input type="email" name="email" placeholder="E-mail" class="form-control input-field"
                                   required="">
                        </div>
                        <!-- /col-md-12 -->
                        <div class="col-md-4">
                            <input type="number" name="people" placeholder="Guests" class="form-control input-field"
                                   required="">
                        </div>
                        <!-- /col-md-4 -->
                        <div class="col-md-8">
                            <div class="input-group date" id="datetimepicker1">
                                <input type="text" placeholder="Date and Time" name="date"
                                       class="form-control input-field" required=""/>
                                <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                            </div>
                        </div>
                        <!-- /col-md-8 -->
                    </div>
                    <!-- /form-group -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6">
                    <div class="col-md-12">
                        <textarea name="message" id="message" class="size-fix textarea-field form-control" rows="7"
                                  placeholder="Message"></textarea>
                    </div>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="submit" id="submit_reservation" value="Submit" class="btn btn-secondary">Send
                            Reservation
                        </button>
                    </div>
                    <!-- Contact results -->
                    <div id="contact_results"></div>
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /form-group -->
        </div>
        <!-- /contact_form -->
    </div>
    <!-- /container-fluid -->

    <!-- /container-fluid -->
</section>
<section id="contact-c" class="py-3 text-center bg-medium">
    <div class="container my-4">
        <div id="map"></div>
    </div>
</section>


<!--<section id="page" class="pages">-->
<!--    <!-- jumbotron -->
<!--    <div class="jumbotron dark-overlay" data-center="background-position: 50% 0px;"-->
<!--         data-top-bottom="background-position: 50% -60px;">-->
<!--        <div class="container">-->
<!--            <!-- /col-md-6 -->
<!--            <div class="jumbo-heading col-md-6 col-md-offset-3" data-start="opacity: 1" data-top="opacity: 0">-->
<!--                <!-- Heading -->
<!--                <h1>Contact</h1>-->
<!--                <!-- Breadcrumb -->
<!--                <ul class="breadcrumb">-->
<!--                    <li><a href="index.html">Home</a></li>-->
<!--                    <li class="active">Contact</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <!-- /jumbo-heading -->
<!--        </div>-->
<!--        <!-- /container -->
<!--    </div>-->
<!--    <!-- /jumbotron -->
<!--    <!-- Page -->
<!--    <div id="page-container" class="contact-page no-bg-small container">-->
<!--        <p class="lead text-center" style="color: black;">If you have any questions, comments, or just want to say hi, feel free to reach out to us at Mad Max Brewery. Our team is always happy to hear from our customers and to help in any way we can. You can contact us by phone at (319) 431-0004 or by email at info@madmaxbrewery.com. Come visit us for a cold beer and some delicious food, and don't hesitate to get in touch if you need anything at all. Cheers!-->
<!--        </p>-->
<!--        <h3 class="text-center" style="margin-top: 4rem;">Hours:</h3>-->
<!--        <p class=" text-center" style="color: black;">Monday-Thursday: 11am to 10pm</p>-->
<!--        <p class=" text-center" style="color: black;">Friday - Saturday: 10am to 11pm</p>-->
<!--        <p class=" text-center" style="color: black;">Sunday: 9am to 10pm</p>-->
<!--    </div>-->
<!--</section>-->
<!--<section id="contact-c" class="py-3 text-center bg-medium">-->
<!--    <div class="container my-4">-->
<!--        <div id="map"></div>-->
<!--    </div>-->
<!--</section>-->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>
