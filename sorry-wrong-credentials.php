<?php
@ob_start();
session_start();
?>

<!-- Loading header and menu partials-->
<?php $is_fixed = true; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="warning-banner-message">
    <div class="row">
        <div class="columns text-center">
            <h1>Sorry, those details didn't work. <br/>
                Click <a data-toggle="modal" data-target="#loginModal">here</a> try again </h1>
        </div>
        <hr>
    </div>
</div>

<?php include 'partials/footer-main.php'; ?>
<!-- loading footer partial -->
<?php include 'partials/footer-scripts.php'; ?>
