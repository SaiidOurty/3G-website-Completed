<?php
@ob_start();
session_start();
?>

<!-- Loading header and menu partials-->
<?php $is_fixed = true; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron enquiries" style="background-image: url('images/3GPic_007.jpg')">
    <div>
        <h1>Thank you for your enquiry</h1>
        <hr>
    </div>
</div>

<div class="container top-padding">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <p>Thank you for your enquiry. We will get back to you shortly.</p>
            <br/>
            <br/>
        </div>
    </div>
</div>

<?php include 'partials/footer-main.php'; ?>
<!-- loading footer partial -->
<?php include 'partials/footer-scripts.php'; ?>
