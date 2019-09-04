<?php
@ob_start();
session_start();
?>
<?php $is_fixed = true; ?>
<!-- Loading header and menu partials-->
<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron"><img class="header-logo" src="images/logo-circle.png" alt="3G logo"/></div>
<div class="row contact-details-wrapper">
    <div class="col-lg-6 address-details">
        <h2>Peterborough</h2>
            <p>Chestnut Avenue, Dogsthorpe, Peterborough, Cambridgeshire, PE1 4PE <br/>
            01733 708789 <br/>
            peterborough@3gfootball.co.uk</p>
        <h2>Opening Times</h2>
            <p>MONDAY-FRIDAY 10AM-10PM <br/></p>
    </div>
    <div class="col-lg-6 nopadding">
        <style>.embed-container {
                position: relative;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
                max-width: 100%;
            }

            .embed-container iframe, .embed-container object, .embed-container embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }</style>
        <div class='embed-container'>
            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.612776115404!2d-0.23125008479458647!3d52.5946938384443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877f0e9cb4a19ff%3A0x2ae36a8778fe1bd1!2sChestnut+Ave%2C+Peterborough!5e0!3m2!1sen!2suk!4v1557688313539!5m2!1sen!2suk'
                    width='600' height='450' frameborder='0' style='border:0'
                    allowfullscreen></iframe>
        </div>
    </div>
</div>
<div id="get-involved">
    <div class="container homepage">
        <h2>Get Involved</h2>
        <hr>
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="fas fa-user-plus"></i>
            </span>
                <h3>Sign up</h3>
                <p>Want to book a pitch with us? Register or log in now for access to our
                    premier pitches.</p>
                <p><a data-toggle="modal" data-target="#loginModal">
                        Register/Log in &raquo;</a></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="far fa-futbol"></i>
            </span>
                <h3>Who we are</h3>
                <p>3G provides commercial five aside football pitches, providing pitch bookings
                    for either football teams, friendlies or even for a casual kick about. Want
                    to have a go?</p>
                <p><a class="btn btn-default" href="about-3g.php" role="button">Find out More
                        &raquo;</a></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="fas fa-at"></i>
            </span>
                <h3>Get in touch</h3>
                <p>We love all the support and feedback we get to help grow and expand, feel
                    free to get in contact and send your enquiries through to us.</p>
                <p><a class="btn btn-default" href="customer-enquiries.php" role="button">Get in touch &raquo;</a></p>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>

<?php include 'partials/footer-main.php'; ?>
<!-- loading footer partial -->
<?php include 'partials/footer-scripts.php'; ?>
