<?php
function insertEnquiries() {
    include 'db-config.php'; // loading db config file to connect
    $name = $_POST['name']; //storing form fields into variables.
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($_POST['email'])) { //checking the email is set
        // running insert query
        mysqli_query($con, "INSERT INTO enquiries(name, email_address, message)
        VALUES('$name', '$email', '$message')")
        or die(mysqli_error($con));
        mysqli_close($con);

        header("location: thank-you.php"); //redirecting to the profile page once login is successful
    }
}

if (isset($_POST['sendEnquiries'])) {
    insertEnquiries();
}