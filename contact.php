<!DOCTYPE html>
<html lang="en">

        <?php
            include './shared/header.php'
        ?>

<body class="">
    <div class="page-wrapper">
        <!-- HEADER-->
        <?php
            include './shared/navbar.php'
        ?>
        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- PAGE HEADING-->
            <section class="section p-t-100 p-b-65">
                <div class="container">
                    <div class="page-heading">
                        <h4 class="title-sub title-sub--c8 m-b-15">Let’s work with us</h4>
                        <h2 class="title-2">Together we can make dream come true</h2>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- CONTACT-->
            <section class="section p-b-80">
                <div class="container">
                    <!-- <div class="map-wrapper js-google-map m-b-60" data-makericon="images/icon/marker.png" data-makers="[[&quot;TATEE&quot;, &quot;Now that you visited our website,&lt;br&gt; how about checking out our office too?&quot;, 40.715681, -74.003427]]">
                        <div class="map__holder js-map-holder" id="map" style="height: 370px;"></div>
                    </div> -->
                    <iframe class="Mapps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.3946393936467!2d80.22556082507494!3d12.88232653742489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525bcca7f090d7%3A0xdfe557111116b049!2sIceil%20Stretch%20Ceilings!5e0!3m2!1sen!2sin!4v1717675103054!5m2!1sen!2sin" width="1170" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="contact-info__item">
                                    <h5 class="title--sm2">address:</h5>
                                    <p class="value">991 White St . Dawsonville GA 30534 , New York</p>
                                </div>
                                <div class="contact-info__item">
                                    <h5 class="title--sm2">PHONE NUMBER :</h5>
                                    <p class="value">+ (898) 784-7217</p>
                                </div>
                                <div class="contact-info__item">
                                    <h5 class="title--sm2">email:</h5>
                                    <p class="value">Tatee.architecture@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact" method="post" action="send-email.php">
                                <div class="form-row no-gutters">
                                    <div class="col-md-6">
                                        <input class="au-input" type="text" name="name" placeholder="Name" id="name" required="required">
                                        <input class="au-input" type="email" name="email" placeholder="Email Address" id="email" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                        <input class="au-input" type="text" name="phone" placeholder="Phone" id="phone" required="required">
                                    </div>
                                    <div class="col-md-6 p-r-0">
                                        <textarea class="au-textarea" name="message" placeholder="Message*" id="message" required="required"></textarea>
                                        <div class="text-right">
                                            <button class="sdfds" type="submit">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CONTACT-->
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <?php
        include './shared/footer.php'
       ?>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/noUiSlider/nouislider.min.js"></script>
    <script src="js/config-contact.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="js/theme-map.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->