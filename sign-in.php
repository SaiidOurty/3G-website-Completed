<?php
function SignIn()
{
    session_start(); //starting the session for user profile page
    include 'db-config.php'; // loading db config file
    if (!empty($_POST['email_address'])) //checking the email is set
    {

        // Running SQL query to check if user email and password exist in the database
        $query = mysqli_query($con, "SELECT * FROM users where email_address = '$_POST[email_address]' AND password = '$_POST[password]'")
        or die(mysqli_connect_error());
        $row = mysqli_fetch_array($query);
        if (!empty($row['email_address']) AND !empty($row['password'])) {
            $_SESSION['email_address'] = $row['email_address'];
            header("location: profile.php"); //redirecting to the profile page once login is successful
            mysqli_close($con); // Closing sql connection
        } else {
            header("location: sorry-wrong-credentials.php"); //
        }
    }
}

if (isset($_POST['submit'])) {
    // run sign in function once form is submitted
    SignIn();
}
