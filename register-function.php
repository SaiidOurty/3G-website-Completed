<?php
function registerNextStep()
{
    $email_address = $_POST['email_address']; // passing email address in url to use in the register form
    header("location: register.php?email=" . $email_address); //redirecting to the register page to complete registration
}

function registerUser()
{
    session_start(); //starting the session for user profile page
    $_SESSION['email_address'] = $_POST['email_address']; //storing email in a session
    include 'db-config.php'; // loading db config file to connect
    $email_address = $_POST['email_address']; //storing form fields into variables.
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $mobile = $_POST['mobile'];
    if (!empty($_POST['email_address'])) { //checking the email is set
        // running insert query
        mysqli_query($con, "INSERT INTO users(email_address, password, first_name, last_name, address_line_1, address_line_2, city, county, mobile)
")
        or die(mysqli_error($con));
        mysqli_close($con);

        header("location: profile.php"); //redirecting to the profile page once login is successful
    }
}

if (isset($_POST['registerNextStep'])) {
    registerNextStep();
}
if (isset($_POST['register'])) {
    registerUser();
}


