<?php session_start();
if (!isset($_SESSION['email_address'])) {
    header("location: index.php"); //redirects to the index.php page if the session doesn't
    // exist because use doesn't have access to this page.
}
?>
<?php $is_fixed = true; ?>
<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container profilepage">
    <h2>Your Profile</h2>
    <hr>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <ul>
                <li><a href="/profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <h4><span class="fa-stack fa-4x">
              <i class="fas fa-user-circle"></i>
            </span> Welcome <?php echo $_SESSION['email_address']; ?></h4>

        </div>
    </div>
</div>

<!-- /container -->
<?php include 'partials/footer-main.php'; ?>
<!-- loading footer partial -->
<?php include 'partials/footer-scripts.php'; ?>
