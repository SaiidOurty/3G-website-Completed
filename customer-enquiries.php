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
        <h1>Customer Enquiries</h1>
        <hr>
    </div>
</div>

<div id="get-involved">
    <div class="container top-padding">

        <form class="form-horizontal" role="form" method="post" action="customer-enquiries-action.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="First & Last Name" value="" required>

                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="example@domain.com" value="" required>

                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message"></textarea>

                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human"
                           placeholder="Your Answer" value="" required>

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="sendEnquiries" class="btn btn-primary btnSubmit"
                           value="Send" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">

                </div>
            </div>
        </form>


    </div>
</div>

<?php include 'partials/footer-main.php'; ?>
<!-- loading footer partial -->
<?php include 'partials/footer-scripts.php'; ?>
